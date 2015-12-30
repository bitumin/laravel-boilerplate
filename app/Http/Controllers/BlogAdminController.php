<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Post;
use App\Role;
use App\Tag;
use App\Status;
use App\Visibility;
use App\User;
use Carbon\Carbon;
use App\Http\Requests\UserRequest;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\ImageUploadRequest;
use App\Http\Requests\PostRequest;
use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Requests\TagUpdateRequest;
use Illuminate\Database\DatabaseManager;
use Illuminate\Contracts\Cache\Repository;
use Intervention\Image\Facades\Image;


class BlogAdminController extends Controller
{
	protected $redirectPath = '/dashboard/blog';
	protected $auth_user;
	protected $post;
	protected $base_slug;
	protected $config;
	protected $category;
	protected $comment;
	protected $user;
	protected $data = [];
	protected $status;
	protected $visibility;
	protected $tag;
	protected $role;
	protected $postData;
	protected $tags = [];
	protected $stored_tags = [];
	protected $cache;

	public function __construct(
		Post $post, Category $category, User $user, Comment $comment,
		Tag $tag, Role $role, Status $status, Repository $cache, Visibility $visibility
	)
	{
		$this->middleware('auth');
		$this->appendMiddleware();

		$this->config = json_decode(json_encode(config('blog')));
		$this->category = $category;
		$this->auth_user = \Auth::check() ? \Auth::user() : false;
		$this->post = $post;
		$this->user = $user;
		$this->comment = $comment;
		$this->tag = $tag;
		$this->role = $role;
		$this->cache = $cache;
		$this->status = $status;
		$this->visibility = $visibility;

		if($this->auth_user) {
			if ( $this->auth_user->is( 'Owner' ) ) {
				$this->buildDataArrayForAdmin();
			} else if ( $this->auth_user->is( 'Author' ) ) {
				$this->buildDataArrayForAuthor();
			} else if ( $this->auth_user->is( 'Reviewer' ) ) {
				$this->buildDataArrayForReviewer();
			}
		}
	}

	/**
	 * @return void
	 */
	private function appendMiddleware()
	{
		$this->middleware('App\Http\Middleware\HasAdminOrAuthorRole', [
			'only' => ['createPost'],
		]);

		$this->middleware('App\Http\Middleware\CanEditPost', [
			'only' => ['editPost'],
		]);

		$this->middleware('App\Http\Middleware\DenyIfBeingEdited', [
			'only' => ['editPost'],
		]);

		$this->middleware('App\Http\Middleware\CanViewPost', [
			'only' => ['editPost', 'showPost'],
		]);

		$this->middleware('App\Http\Middleware\IsOwner', [
			'only' => ['editProfile']
		]);
	}

	/*
	 * API
	 */

	/**
	 * Order the data of a given table on the given column
	 * and the given order
	 *
	 * @param string $table
	 * @param string $column
	 * @param string $order
	 * @param bool $trashed
	 * @param \Illuminate\Database\DatabaseManager $db
	 * @return object
	 */
	public function sort( $table, $column, $order, $trashed = false, DatabaseManager $db )
	{
		$db = $db->connection();
		$data = $db->table($table);

		// Check for trashed data
		$data = $trashed ? $data->whereNotNull('deleted_at') : $data->whereNull('deleted_at');

		if ($table == 'users') {
			$data = $data->join('role_user', 'users.id', '=', 'role_user.user_id')
				->where(function ($q) {
					$q->where('role_user.role_id', Role::findBySlug('Owner')->id)
					  ->orWhere('role_user.role_id', Role::findBySlug('Author')->id)
					  ->orWhere('role_user.role_id', Role::findBySlug('Reviewer')->id)
					  ->orWhere('role_user.role_id', Role::findBySlug('Member')->id);
				})->groupBy('users.id');
		}

		if ($table == 'posts')
			$data = $data->join('statuses', 'posts.status_id', '=', 'statuses.id');

		$data = $data->orderBy($column, $order)->paginate($this->config->items_per_page);

		return $data;
	}

	/**
	 * Save the current post in the cache
	 *
	 * @param \Cache $cache
	 * @param \Request $request;
	 * @return \Symfony\Component\HttpFoundation\Response
	 */
	public function autoSave(\Cache $cache, \Request $request)
	{
		try {
			$slug = $this->auth_user->slug;
			$cache->put(
				"autoSavedPost-$slug",
				$request->all(),
				Carbon::now()->addHours(2)
			);
		} catch (\Exception $exception) {
			return response()->json([false, date('d-m-Y H:i:s')]);
		}

		return response()->json([true, date('d-m-Y H:i:s')]);
	}

	/**
	 * @param $slug
	 * @param \App\Tag $tag
	 * @return mixed
	 */
	public function getTag($slug, Tag $tag)
	{
		return $tag->findBySlugOrFail($slug);
	}

	/*
	 * Categories
	 */

	/**
	 * @param $trashed
	 * @return \Illuminate\View\View
	 */
	public function indexCategory($trashed = null)
	{
		$categories = (! $trashed) ?
			$this->category
				->orderBy('created_at', 'DESC')
				->paginate($this->config->items_per_page)
			:
			$this->category
				->onlyTrashed()
				->orderBy('created_at', 'DESC')
				->paginate($this->config->items_per_page);

		return view('blog.dashboard.categories.index', compact('categories', 'trashed'));
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function createCategory()
	{
		return view('blog.dashboard.categories.form');
	}

	/**
	 * @param string $slug
	 * @return \Illuminate\View\View
	 */
	public function editCategory($slug)
	{
		$category = $this->category->findBySlugOrFail($slug);

		return view('blog.dashboard.categories.form', compact('category'));
	}

	/**
	 * @param \App\Http\Requests\CategoryRequest $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function storeCategory(CategoryRequest $request)
	{
		$category = $this->storeOrUpdateCategory($request);

		if ($request->ajax()) {
			return $category;
		}

		session()->flash('notify', ['success', trans(
			'notify.success', [
				'model' => 'Category',
				'name' => $category->name,
				'action' =>'created'
			]
		)]);

		return redirect()->route('blog.admin.categories.index');
	}

	/**
	 * @param string $slug
	 * @param \App\Http\Requests\CategoryRequest $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function updateCategory($slug, CategoryRequest $request)
	{
		$category = $this->category->findBySlugOrFail($slug);
		$category->name = $request->name;
		$category->save();

		session()->flash('notify', ['success', trans(
			'notify.success', [
				'model' => 'Category',
				'name' => $category->name,
				'action' =>'updated'
			]
		)]);

		return redirect()->route('blog.admin.categories.index');
	}

	/**
	 * @param string $slug
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function destroyCategory($slug)
	{
		$category = $this->category->findBySlugOrFail($slug);
		$category_name = $category->name;
		$category->delete();

		session()->flash('notify', ['success', $message = trans(
			'notify.success', [
				'model' => 'Categorie',
				'name' => $category_name,
				'action' =>'deleted'
			]
		)]);

		return redirect()->route('blog.admin.categories.index');
	}

	/**
	 * @param string $slug
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function restoreCategory($slug)
	{
		$category = $this->category->withTrashed()->findBySlugOrFail($slug);
		$category_name = $category->name;
		$category->restore();

		session()->flash('notify', ['success', trans(
			'notify.success', [
				'model' => 'Category',
				'name' => $category_name,
				'action' =>'restored'
			]
		)]);

		return redirect()->route('blog.admin.categories.index');
	}

	/**
	 * Save the given category in the db
	 *
	 * @param CategoryRequest $request
	 * @return \App\Category
	 */
	private function storeOrUpdateCategory($request)
	{
		$cat = $this->category->whereName($request->name)->first();

		if (count($cat) > 0) {
			$category = $cat;
		} else {
			$category = new Category;
		}

		$category->name = $request->name;
		$category->save();

		return $category;
	}

	/*
	 * Dashboard
	 */

	/**
	 * Show the dashboard view
	 *
	 * @return \Illuminate\View\View
	 */
	public function indexDashboard()
	{
		return view("blog.dashboard.home", $this->data);
	}

	/**
	 * @return void
	 */
	private function buildDataArrayForAdmin()
	{
		$this->data['new_users_since_last_visit'] = $this->user->newUsersSince($this->auth_user->updated_at)->count();
		$this->data['pending_comments'] = $this->comment->byRevised(1)->count();
		$this->data['published_posts'] = $this->post->where('publish_date', '<=', date('Y-m-d H:i:s'))->count();
		$this->data['pending_review_posts'] = $this->post->whereStatusId(2)->count();
	}

	/**
	 * @return void
	 */
	private function buildDataArrayForAuthor()
	{
		$this->data['published_posts'] = $this->post
			->where('publish_date', '<=', date('Y-m-d H:i:s'))
			->forAuthor()
			->count();
		$this->data['pending_review_posts'] = $this->post
			->whereStatusId(2)
			->forAuthor()
			->count();
		$post_ids = $this->post
			->forAuthor()
			->lists('id');
		$this->data['pending_comments'] = $this->comment
			->byRevised(1)
			->whereIn('post_id', $post_ids)
			->count();
	}

	/**
	 * @return void
	 */
	private function buildDataArrayForReviewer()
	{
		$this->data['pending_review_posts'] = $this->post
			->whereStatusId(2)
			->forReviewer()
			->count();
	}

	/*
	 * Post
	 */

	/**
	 * @param bool $trashed
	 * @return \Illuminate\View\View
	 */
	public function indexPost($trashed = false)
	{
		$scope = 'for'.$this->auth_user->getBloggerRoleName();
		$data = [
			'posts' => (! $trashed) ?
				$this->post->$scope()
				           ->orderBy('publish_date', 'DESC')
				           ->paginate($this->config->items_per_page)
				:
				$this->post->$scope()
				           ->onlyTrashed()
				           ->orderBy('publish_date', 'DESC')
				           ->paginate($this->config->items_per_page),
			'trashed' => $trashed,
		];

		return view('blog.dashboard.posts.index', $data);
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function createPost()
	{
		$slug = $this->auth_user->slug;
		$post = $this->cache->has("autoSavedPost-$slug") ? $this->buildPostObject() : null;
		$data = $this->getViewData($post);

		return view('blog.dashboard.posts.form', $data);
	}

	/**
	 * @param string $slug
	 * @return \Illuminate\View\View
	 */
	public function showPost($slug)
	{
		$data = [
			'post' => $this->post->findBySlugOrFail($slug),
		];

		return view('blog.dashboard.posts.show', $data);
	}

	/**
	 * @param string $slug
	 * @return \Illuminate\View\View
	 */
	public function editPost($slug)
	{
		$originalPost = $this->post->findBySlugOrFail($slug);
		$slug = $this->auth_user->slug;
		$post = $this->cache->has("autoSavedPost-$slug") ? $this->buildPostObject() : $originalPost;
		$data = $this->getViewData($post);

		$originalPost->being_edited_by = $this->auth_user->id;
		$originalPost->save();

		return view('blog.dashboard.posts.form', $data);
	}

	/**
	 * Store or update a post
	 *
	 * @param \App\Http\Requests\PostRequest $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function storePost(PostRequest $request)
	{
		$this->postData = json_decode(json_encode($request->except([
			'_token', 'newCategory', 'newTags'
		])));

		if (! empty($this->postData->tags) && $this->postData->tags != "undefined")
			$this->buildTagsArray();
		$post = $this->storeOrUpdatePost();

		if ($this->status->findBySlug($this->postData->status)->name == 'Pending review')
			$this->mailReviewer($post);

		$action = ($request->slug == '') ? 'created' : 'updated';

		session()->flash('notify', ['success', trans('notify.success', [
			'model' => 'Post', 'name' => $post->title, 'action' => $action
		])]);

		$slug = $this->auth_user->slug;
		$this->cache->forget("autoSavedPost-$slug");

		return redirect()->route('blog.admin.posts.index');
	}

	/**
	 * @param string $slug
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function destroyPost($slug)
	{
		$post = $this->post->findBySlugOrFail($slug);
		$post->delete();

		session()->flash('notify', ['success', trans('notify.success', [
			'model' => 'Post', 'name' => $post->title, 'action' =>'deleted'
		])]);

		return redirect()->route('blog.admin.posts.index');
	}

	/**
	 * Function to upload images using
	 * the SKEditor
	 *
	 * note: no CSRF protection on the route that is
	 * calling this function because we are using the
	 * CKEditor within an iframe :(
	 *
	 * @param \App\Http\Requests\ImageUploadRequest $request
	 * @return string
	 */
	public function uploadImage(ImageUploadRequest $request)
	{
		$image_name = $this->resizeAndSaveImage($request->file('upload'));
		$path = url().'/uploads/posts/'.$image_name;
		$func = $request->get('CKEditorFuncNum');
		$result = "<script>window.parent.CKEDITOR.tools.callFunction($func, '$path', 'Image has been uploaded')</script>";

		return $result;
	}

	/**
	 * Cancel changes in a post
	 * and set being_edited_by
	 * back to null
	 *
	 * @param string $slug
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function cancelPost($slug = null)
	{
		if (! isset($slug)) {
			return redirect()->route('blog.admin.posts.index');
		}

		$userSlug = $this->auth_user->slug;
		if ($this->cache->has("autoSavedPost-$userSlug")) {
			$this->cache->forget("autoSavedPost-$userSlug");
		}

		$post = $this->post->findBySlugOrFail($slug);
		$post->being_edited_by = null;
		$post->save();

		session()->flash('notify', ['success', trans('notify.success', [
			'model' => 'Post', 'name' => $post->name, 'action' =>'canceled'
		])]);

		return redirect()->route('blog.admin.posts.index');
	}

	/**
	 * @param string $slug
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function restorePost($slug)
	{
		$post = $this->post->withTrashed()->findBySlugOrFail($slug);
		$post->restore();

		session()->flash('notify', ['success', trans('notify.success', [
			'model' => 'Post', 'name' => $post->title, 'action' =>'restored'
		])]);

		return redirect()->route('blog.admin.posts.index');
	}

	/**
	 * Get the default data for the
	 * create and edit view
	 *
	 * @param $post
	 * @return array
	 */
	private function getViewData($post = null)
	{
		return [
			'reviewers'     => $this->user->reviewers(),
			'statuses'      => $this->status->all(),
			'categories'    => $this->category->all(),
			'visibility'    => $this->visibility->all(),
			'publish_date'  => Carbon::now()->format('d-m-Y H:i'),
			'post'          => $post,
		];
	}

	/**
	 * @param $image
	 * @return string
	 */
	private function resizeAndSaveImage($image)
	{
		$image_name = $this->createImageName();
		$fullpath = $this->createFullImagePath($image_name, $image->getClientOriginalExtension());

		Image::make($image->getRealPath())
		     ->resize($this->config->image_sizes->posts[0], null, function($constraint) {
			     $constraint->aspectRatio();
			     $constraint->upsize();
		     })
		     ->save($fullpath);

		return $image_name.'.'.$image->getClientOriginalExtension();
	}

	/**
	 * @param string $image_name
	 * @param $extension
	 * @return string
	 */
	private function createFullImagePath($image_name, $extension)
	{
		return public_path($this->config->upload_paths->posts->images.$image_name.'.'.$extension);
	}

	/**
	 * @return string
	 */
	private function createImageName()
	{
		return time().'-'.str_replace(' ', '-', $this->auth_user->fullName);
	}

	/**
	 * @return void
	 */
	private function buildTagsArray()
	{
		$tags = explode(',', $this->postData->tags);

		foreach ($tags as $tagSlug)
			array_push($this->tags, $this->tag->findBySlugOrFail($tagSlug)->id);
	}

	/**
	 * @return \App\Post
	 */
	private function storeOrUpdatePost()
	{
		if (! empty($this->postData->slug))
			$post = $this->post->findBySlugOrFail($this->postData->slug);
		else
			$post = new Post;
		
		$post->title = $this->postData->title;
		$post->content = $this->postData->post;
		$post->status_id = $this->status->findBySlugOrFail($this->postData->status)->id;
		$post->publish_date = $this->postData->publishdate;
		$post->user_id = $this->user->findBySlugOrFail($this->auth_user->slug)->id;
		$post->reviewer_id = $this->user->findBySlugOrFail($this->postData->reviewer)->id;
		$post->visibility_id = $this->visibility->findBySlugOrFail($this->postData->visibility)->id;
		$post->category_id = $this->category->findBySlugOrFail($this->postData->category)->id;
		$post->being_edited_by = null;

		if (!empty($this->postData->password))
			$post->password = bcrypt($this->postData->password);

		$post->save();

		$post->tag()->sync($this->tags);

		return $post;
	}

	/**
	 * @param \App\Post $post
	 * @return void
	 */
	private function mailReviewer($post)
	{
		$reviewer = $this->user->find($post->reviewer_id);
		$data = [
			'reviewer'  => $reviewer,
			'post'      => $post,
		];

		//todo
//		$this->mail->mailReviewer($reviewer->email, 'An article needs your expertise', $data);
	}

	/**
	 * Build a post object when there
	 * is a cached post so we can put
	 * the data back in the form
	 *
	 * @return object
	 */
	private function buildPostObject()
	{
		$slug = $this->auth_user->slug;
		$cached_post = $this->cache->get("autoSavedPost-$slug");

		$post = [];
		$post['slug'] = '';
		$post['title'] = $cached_post['title'];
		$post['slug'] = $cached_post['slug'];
		$post['content'] = $cached_post['content'];
		$post['publish_date'] = $cached_post['publishdate'];
		$post['status_id'] = $this->status->findBySlugOrFail($cached_post['status'])->id;
		$post['visibility_id'] = $this->visibility->findBySlugOrFail($cached_post['visibility'])->id;
		$post['reviewer_id'] = $this->user->findBySlugOrFail($cached_post['reviewer'])->id;
		$post['category_id'] = $this->category->findBySlugOrFail($cached_post['category'])->id;
		$post['tag'] = $this->buildTagsArrayForPostObject($cached_post['tags']);

		return json_decode(json_encode($post));
	}

	/**
	 * @param $tags
	 * @return array
	 */
	private function buildTagsArrayForPostObject($tags)
	{
		if ($tags == "")
			return [];

		$aTags = [];
		$sluges = explode(',', $tags);

		foreach ($sluges as $tag)
			array_push($aTags, $this->tag->findBySlugOrFail($tag));

		return $aTags;
	}

	/*
	 * Profile
	 */

	/**
	 * @param string $slug
	 * @return \Illuminate\View\View
	 */
	public function editProfile($slug)
	{
		$data = [
			'user' => $this->user->findBySlugOrFail($slug),
		];

		return view('blog.dashboard.profiles.form', $data);
	}

	/**
	 * @param string $slug
	 * @param \App\Http\Requests\ProfileUpdateRequest $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function updateProfile($slug, ProfileUpdateRequest $request)
	{
		$user = $this->user->findBySlugOrFail($slug);
		$user->lastname = $request->lastname;
		$user->firstname = $request->firstname;
		$user->username = $request->username;
		$user->email = $request->email;

		if ($request->has('newpassword'))
			$user->password = bcrypt($request->newpassword);

		if ($request->hasFile('profilepicture'))
			$this->handleImage($request->file('profilepicture'), $user);

		$user->save();

		session()->flash('notify', [
			'success',
			trans('notify.success', [
				'model' => 'User',
				'name' => $user->fullName,
				'action' =>'updated',
			])
		]);

		return redirect()->route('blog.admin.dashboard');
	}

	/**
	 * @param $image
	 * @param $user
	 */
	private function handleImage($image, $user)
	{
		$filename = $this->generateFilename();
		$path = $this->resizeAndSaveProfilePicture($image, $filename);

		if (isset($user->profilepicture)) {
			$this->removeOldPicture($user->profilepicture);
		}

		$user->profilepicture = $path;
	}

	/**
	 * @return string
	 */
	private function generateFilename()
	{
		return time().'-'.$this->auth_user->username.'-profilepicture';
	}

	/**
	 * @param $image
	 * @param string $filename
	 * @return string
	 */
	private function resizeAndSaveProfilePicture($image, $filename)
	{
		$extention = $image->getClientOriginalExtension();
		$fullpath = $this->config->upload_paths->profiles->profilepictures.$filename.'.'.$extention;

		Image::make($image->getRealPath())
		     ->resize(
			     $this->config->image_sizes->profilepictures[0],
			     $this->config->image_sizes->profilepictures[1],
			     function($constraint) {
				     $constraint->aspectRatio();
				     $constraint->upsize();
			     })
		     ->save($fullpath);

		return $fullpath;
	}

	/**
	 * @param $oldPicture
	 */
	private function removeOldPicture($oldPicture)
	{
		if (file_exists($oldPicture))
			unlink($oldPicture);
	}

	/*
	 * Tags
	 */

	/**
	 * @param string $trashed
	 * @return \Illuminate\View\View
	 */
	public function indexTag($trashed = null)
	{
		$data = [
			'tags' => (! $trashed) ?
				$this->tag->orderBy('created_at', 'DESC')
				          ->paginate($this->config->items_per_page)
				:
				$this->tag->onlyTrashed()
				          ->orderBy('created_at', 'DESC')
				          ->paginate($this->config->items_per_page),
			'trashed' => $trashed,
		];

		return view('blog.dashboard.tags.index', $data);
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function createTag()
	{
		return view('blog.dashboard.tags.form');
	}

	/**
	 * @param $slug
	 * @return \Illuminate\View\View
	 */
	public function editTag($slug)
	{
		$data = [
			'tag' => $this->tag->findBySlugOrFail($slug),
		];

		return view('blog.dashboard.tags.form', $data);
	}

	/**
	 * @return $this|array|\Illuminate\Http\RedirectResponse
	 */
	public function storeOrUpdateTag()
	{
		// prepare submitted tag(s)
		$this->fillTagsArray();
		$this->deleteSpacesAtTheBeginningAndEnd();

		// validate tag(s)
		$validation = $this->tag->validate($this->tags);
		if ($validation->fails()) {
			if (\Request::ajax())
				return ['passed' => false, 'messages' => $validation->messages()];

			return redirect()->back()->withErrors($validation->messages())->withInput();
		}

		// store or update the tag in the db
		$this->storeOrUpdateTags();

		if (\Request::ajax())
			return ['passed' => true, 'tags' => $this->stored_tags];

		session()->flash('notify', ['success', trans('notify.success', [
			'model' => 'Tags',
			'name' => $this->getTagNames(),
			'action' =>'created'
		])]);

		return redirect()->route('blog.admin.tags.index');
	}

	/**
	 * @param string $slug
	 * @param \App\Http\Requests\TagUpdateRequest $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function updateTag($slug, TagUpdateRequest $request)
	{
		$tag = $this->tag->findBySlugOrFail($slug);
		$tag->name = $request->tags;
		$tag->save();

		session()->flash('notify', ['success', trans('notify.success', [
			'model' => 'Tags', 'name' => $tag->name, 'action' =>'updated'
		])]);

		return redirect()->route('blog.admin.tags.index');
	}

	/**
	 * @param string $slug
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function destroyTag($slug)
	{
		$tag = $this->tag->findBySlugOrFail($slug);
		$tag->delete();

		session()->flash('notify', ['success', trans('notify.success', [
			'model' => 'Tags', 'name' => $tag->name, 'action' =>'deleted'
		])]);

		return redirect()->route('blog.admin.tags.index');
	}

	/**
	 * @param string $slug
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function restoreTag($slug)
	{
		$tag = $this->tag->withTrashed()->findBySlugOrFail($slug);
		$tag->restore();

		session()->flash('notify', ['success', trans('notify.success', [
			'model' => 'Tag', 'name' => $tag->name, 'action' =>'restored'
		])]);

		return redirect()->route('blog.admin.tags.index');
	}

	/**
	 * @return void
	 */
	private function fillTagsArray()
	{
		$tags = \Input::get('tags');
		$this->tags = explode(',', $tags);
	}

	/**
	 * @return void
	 */
	private function deleteSpacesAtTheBeginningAndEnd()
	{
		foreach ($this->tags as $key => $tag)
			$this->tags[$key] = trim($tag);
	}

	/**
	 * @return void
	 */
	private function storeOrUpdateTags()
	{
		foreach ($this->tags as $tag_name) {
			$t = $this->tag->whereName($tag_name)->first();

			$tag = (count($t) > 0) ? $t : new Tag;

			$tag->name = $tag_name;

			$tag->save();

			array_push($this->stored_tags, $tag);
		}
	}

	/**
	 * @return string
	 */
	private function getTagNames()
	{
		$tags = '';

		foreach ($this->stored_tags as $tag)
			$tags .= $tag->name.', ';

		return $tags;
	}

	/*
	 * User
	 */

	/**
	 * @param bool $trashed
	 * @return \Illuminate\View\View
	 */
	public function indexUser($trashed = false)
	{
		$data = [
			'users' => (! $trashed) ?
				$this->user->blogger()
					->orderBy('lastname', 'ASC')
					->paginate($this->config->items_per_page)
				:
				$this->user->blogger()
					->onlyTrashed()
					->orderBy('name', 'ASC')
					->paginate($this->config->items_per_page),
			'trashed' => $trashed,
		];

		return view('blog.dashboard.users.index', $data);
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function createUser()
	{
		$data = [
			'roles' => $this->role->byBloggerRole()->get(),
		];

		return view('blog.dashboard.users.form', $data);
	}

	/**
	 * @param string $slug
	 * @return \Illuminate\View\View
	 */
	public function editUser($slug)
	{
		$data = [
			'roles' => $this->role->byBloggerRole()->get(),
			'user'  => $this->user->findBySlugOrFail($slug),
		];

		return view('blog.dashboard.users.form', $data);
	}

	/**
	 * @param \App\Http\Requests\UserRequest $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function storeUser(UserRequest $request)
	{
		$data = $this->storeOrUpdateUser($request);
		$user = $data['user'];
		$mail_data = [
			'user'      => $data['user'],
			'password'  => $data['password'],
		];

		\Mail::send('blog-mails.password', $mail_data, function($message) use($data) {
			$message->to(
				$data['user']->email,
				$data['user']->firstname.(empty($data['user']->lastname)) ? '' : ' '.$data['user']->lastname
			)->subject('Welcome!');
		});

		session()->flash('notify', ['success', trans('notify.success', [
			'model' => 'User', 'name' => $user->fullName, 'action' =>'created'
		])]);

		return redirect()->route('blog.admin.users.index');
	}

	/**
	 * @param \App\Http\Requests\UserRequest $request
	 * @param string $slug
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function updateUser(UserRequest $request, $slug)
	{
		$data = $this->storeOrUpdateUser($request, $slug);
		$user = $data['user'];
		$message = trans('notify.success', [
			'model' => 'User',
			'name' => $user->firstname.' '.$user->name,
			'action' =>'updated'
		]);

		session()->flash('notify', ['success', $message]);

		return redirect()->route('blog.admin.users.index');
	}

	/**
	 * @param string $slug
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function destroyUser($slug)
	{
		$user = $this->user->findBySlugOrFail($slug);
		$user->delete();

		session()->flash('notify', ['success', $message = trans('notify.success', [
			'model' => 'User', 'name' => $user->fullName, 'action' =>'deleted'
		])]);

		return redirect()->route('blog.admin.users.index');
	}

	/**
	 * @param string $slug
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function restoreUser($slug)
	{
		$user = $this->user->withTrashed()->findBySlugOrFail($slug);
		$user->restore();

		session()->flash('notify', ['success', trans('notify.success', [
			'model' => 'Post', 'name' => $user->fullName, 'action' =>'restored'
		])]);

		return redirect()->route('blog.admin.users.index');
	}

	/**
	 * @param \App\Http\Requests\UserRequest $data
	 * @param string $slug
	 * @return array
	 */
	private function storeOrUpdateUser($data, $slug = null)
	{
		$password = null;

		if (! isset($slug)) {
			$user = new User;
			$user->name = $data->firstname.(empty($data->lastname)) ? '' : ' '.$data->lastname;
			$user->username = $data->username;
			$user->password = bcrypt($data->password);
			$user->firstname = $data->firstname;
			$user->lastname = $data->lastname;
			$user->email = $data->email;
		} else {
			$user = $this->user->findBySlugOrFail($slug);
		}

		$user->save();

		$user->assignRole($this->role->whereSlug($data->role)->pluck('id'));

		return ['user' => $user, 'password' => $password];
	}

}