<?php

namespace App\Http\Controllers\Blog;

use Carbon\Carbon;
use Illuminate\Contracts\Sluging\Sluger;
use App\User;
use App\Category;
use App\Role;
use App\Status;
use App\Tag;
use App\Visibility;
use App\Post;
use App\Http\Requests\Blog\ImageUploadRequest;
use App\Http\Requests\Blog\PostRequest;
use Intervention\Image\Facades\Image;
use Illuminate\Contracts\Cache\Repository;

class PostsController extends AdminController
{
    /**
     * @var \App\Post
     */
    protected $post;

    /**
     * @var \App\Status
     */
    protected $status;

    /**
     * @var \App\Visibility
     */
    protected $visibility;

    /**
     * @var \App\User
     */
    protected $user;

    /**
     * @var \App\Category
     */
    protected $category;

	/**
	 * @var mixed
	 */
	protected $config;

    /**
     * @var \App\Tag
     */
    protected $tag;

    /**
     * @var \App\Role
     */
    protected $role;

    /**
     * Holds the post data
     *
     * @var object
     */
    protected $data;

    /**
     * Holds all the tags that are
     * assigned to a post
     *
     * @var array
     */
    protected $tags = [];

    /**
     * @var \Illuminate\Contracts\Cache\Repository;
     */
    protected $cache;

    /**
     * @param \App\Tag $tag
     * @param \App\Role $role
     * @param \App\User $user
     * @param \App\Post $post
     * @param \App\Status $status
     * @param \Illuminate\Contracts\Cache\Repository $cache
     * @param \App\Category $category
     * @param \App\Visibility $visibility
     */
    public function __construct(
	    Tag $tag, Role $role, User $user, Post $post, Status $status,
	    Repository $cache, Category $category, Visibility $visibility
    ) {
	    parent::__construct();

        $this->appendMiddleware();

	    $this->config = json_decode(json_encode(config('blogify')));
        $this->tag = $tag;
        $this->role = $role;
        $this->user = $user;
	    $this->auth_user = \Auth::check() ? \Auth::user() : false;
        $this->post = $post;
        $this->cache = $cache;
        $this->status = $status;
        $this->category = $category;
        $this->visibility = $visibility;
    }

    ///////////////////////////////////////////////////////////////////////////
    // View methods
    ///////////////////////////////////////////////////////////////////////////

    /**
     * @param bool $trashed
     * @return \Illuminate\View\View
     */
    public function index($trashed = false)
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

        return view('blog-admin.posts.index', $data);
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $slug = $this->auth_user->slug;
        $post = $this->cache->has("autoSavedPost-$slug") ? $this->buildPostObject() : null;
        $data = $this->getViewData($post);

        return view('blog-admin.posts.form', $data);
    }

    /**
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function show($slug)
    {
        $data = [
            'post' => $this->post->bySlug($slug),
        ];

        if ($data['post']->count() <= 0) {
            abort(404);
        }

        return view('blog-admin.posts.show', $data);
    }

    /**
     * @param string $slug
     * @return \Illuminate\View\View
     */
    public function edit($slug)
    {
        $originalPost = $this->post->bySlug($slug);
        $slug = $this->auth_user->slug;
        $post = $this->cache->has("autoSavedPost-$slug") ? $this->buildPostObject() : $originalPost;
        $data = $this->getViewData($post);

        $originalPost->being_edited_by = $this->auth_user->id;
        $originalPost->save();

        return view('admin.posts.form', $data);
    }

    ///////////////////////////////////////////////////////////////////////////
    // CRUD methods
    ///////////////////////////////////////////////////////////////////////////

    /**
     * Store or update a post
     *
     * @param \App\Http\Requests\Blog\PostRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PostRequest $request)
    {
        $this->data = json_decode(json_encode($request->except([
            '_token', 'newCategory', 'newTags'
        ])));

        if (! empty($this->data->tags)) {
            $this->buildTagsArray();
        }

        $post = $this->storeOrUpdatePost();

        if ($this->status->bySlug($this->data->status)->name == 'Pending review') {
            $this->mailReviewer($post);
        }

        $action = ($request->slug == '') ? 'created' : 'updated';

        $this->tracert->log('posts', $post->id, $this->auth_user->id, $action);

        $message = trans('notify.success', [
            'model' => 'Post', 'name' => $post->title, 'action' => $action
        ]);
        session()->flash('notify', ['success', $message]);

        $slug = $this->auth_user->slug;
        $this->cache->forget("autoSavedPost-$slug");

        return redirect()->route('blog-admin.posts.index');
    }

    /**
     * @param string $slug
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($slug)
    {
        $post = $this->post->bySlug($slug);
        $post->delete();

        $this->tracert->log('posts', $post->id, $this->auth_user->id, 'delete');

        $message = trans('notify.success', [
            'model' => 'Post', 'name' => $post->title, 'action' =>'deleted'
        ]);
        session()->flash('notify', ['success', $message]);

        return redirect()->route('blog-admin.posts.index');
    }

    /**
     * Function to upload images using
     * the SKEditor
     *
     * note: no CSRF protection on the route that is
     * calling this function because we are using the
     * CKEditor within an iframe :(
     *
     * @param \App\Http\Requests\Blog\ImageUploadRequest $request
     * @return string
     */
    public function uploadImage(ImageUploadRequest $request)
    {
        $image_name = $this->resizeAndSaveImage($request->file('upload'));
        $path = config('app.url').'/uploads/posts/'.$image_name;
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
    public function cancel($slug = null)
    {
        if (! isset($slug)) {
            return redirect()->route('blog-admin.posts.index');
        }

        $userSlug = $this->auth_user->slug;
        if ($this->cache->has("autoSavedPost-$userSlug")) {
            $this->cache->forget("autoSavedPost-$userSlug");
        }

        $post = $this->post->bySlug($slug);
        $post->being_edited_by = null;
        $post->save();

        $this->tracert->log('posts', $post->id, $this->auth_user->id, 'canceled');

        $message = trans('notify.success', [
            'model' => 'Post', 'name' => $post->name, 'action' =>'canceled'
        ]);
        session()->flash('notify', ['success', $message]);

        return redirect()->route('blog-admin.posts.index');
    }

    /**
     * @param string $slug
     * @return \Illuminate\Http\RedirectResponse
     */
    public function restore($slug)
    {
        $post = $this->post->withTrashed()->bySlug($slug);
        $post->restore();

        $message = trans('notify.success', [
            'model' => 'Post', 'name' => $post->title, 'action' =>'restored'
        ]);
        session()->flash('notify', ['success', $message]);

        return redirect()->route('blog-admin.posts.index');
    }

    ///////////////////////////////////////////////////////////////////////////
    // Helper methods
    ///////////////////////////////////////////////////////////////////////////

    /**
     * @return void
     */
    private function appendMiddleware()
    {
        $this->middleware('App\Http\Middleware\Blog\HasAdminOrAuthorRole', [
            'only' => ['create'],
        ]);

        $this->middleware('App\Http\Middleware\Blog\CanEditPost', [
            'only' => ['edit'],
        ]);

        $this->middleware('App\Http\Middleware\Blog\DenyIfBeingEdited', [
            'only' => ['edit'],
        ]);

        $this->middleware('App\Http\Middleware\Blog\CanViewPost', [
            'only' => ['edit', 'show'],
        ]);
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
        $tags = explode(',', $this->data->tags);

        foreach ($tags as $slug) {
            array_push($this->tags, $this->tag->bySlug($slug)->id);
        }
    }

    /**
     * @return \App\Post
     */
    private function storeOrUpdatePost()
    {
        if (! empty($this->data->slug)) {
            $post = $this->post->bySlug($this->data->slug);
        } else {
            $post = new Post;
            $post->slug = $this->blogify->makeSlug('posts', 'slug', true);
        }

        $post->slug = $this->data->slug;
        $post->title = $this->data->title;
        $post->content = $this->data->post;
        $post->status_id = $this->status->bySlug($this->data->status)->id;
        $post->publish_date = $this->data->publishdate;
        $post->user_id = $this->user->bySlug($this->auth_user->slug)->id;
        $post->reviewer_id = $this->user->bySlug($this->data->reviewer)->id;
        $post->visibility_id = $this->visibility->bySlug($this->data->visibility)->id;
        $post->category_id = $this->category->bySlug($this->data->category)->id;
        $post->being_edited_by = null;

        if (!empty($this->data->password)) {
            $post->password = $this->slug->make($this->data->password);
        }

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

        $this->mail->mailReviewer($reviewer->email, 'An article needs your expertise', $data);
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
        $post['status_id'] = $this->status->bySlug($cached_post['status'])->id;
        $post['visibility_id'] = $this->visibility->bySlug($cached_post['visibility'])->id;
        $post['reviewer_id'] = $this->user->bySlug($cached_post['reviewer'])->id;
        $post['category_id'] = $this->category->bySlug($cached_post['category'])->id;
        $post['tag'] = $this->buildTagsArrayForPostObject($cached_post['tags']);

        return json_decode(json_encode($post));
    }

    /**
     * @param $tags
     * @return array
     */
    private function buildTagsArrayForPostObject($tags)
    {
        if ($tags == "") {
            return [];
        }

        $aTags = [];
        $sluges = explode(',', $tags);

        foreach ($sluges as $tag) {
            array_push($aTags, $this->tag->bySlug($tag));
        }

        return $aTags;
    }
}