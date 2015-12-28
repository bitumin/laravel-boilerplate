<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use Carbon\Carbon;
use Illuminate\Database\DatabaseManager;

class BlogAdminController extends Controller
{
	protected $redirectPath = '/admin';
	protected $auth_user;
	protected $post;
	protected $base_slug;
	protected $config;
	protected $category;

	public function __construct(Post $post, Category $category)
	{
		$this->middleware('auth');
		$this->config = json_decode(json_encode(config('blog')));
		$this->category = $category;
		$this->auth_user = \Auth::check() ? \Auth::user() : false;
		$this->post = $post;
	}

	/*
	 * API Controller
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

		if ($table == 'users')
			$data = $data->join('role_user', 'users.id', '=', 'role_user.user_id');

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
	 * Categories Controller
	 */

	// View methods

	/**
	 * @param $trashed
	 * @return \Illuminate\View\View
	 */
	public function index($trashed = null)
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

		return view('admin.categories.index', compact('categories', 'trashed'));
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function create()
	{
		return view('admin.categories.form');
	}

	/**
	 * @param string $slug
	 * @return \Illuminate\View\View
	 */
	public function edit($slug)
	{
		$category = $this->category->bySlug($slug);

		return view('admin.categories.form', compact('category'));
	}

	///////////////////////////////////////////////////////////////////////////
	// CRUD methods
	///////////////////////////////////////////////////////////////////////////

	/**
	 * @param \App\Http\Requests\Blog\CategoryRequest $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function store(CategoryRequest $request)
	{
		$category = $this->storeOrUpdateCategory($request);

		if ($request->ajax()) {
			return $category;
		}

		$message = trans(
			'notify.success', [
				'model' => 'Category',
				'name' => $category->name,
				'action' =>'created'
			]
		);
		session()->flash('notify', ['success', $message]);

		return redirect()->route('admin.categories.index');
	}

	/**
	 * @param string $slug
	 * @param \App\Http\Requests\Blog\CategoryRequest $request
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function update($slug, CategoryRequest $request)
	{
		$category = $this->category->bySlug($slug);
		$category->name = $request->name;
		$category->save();

		$message = trans(
			'notify.success', [
				'model' => 'Category',
				'name' => $category->name,
				'action' =>'updated'
			]
		);
		session()->flash('notify', ['success', $message]);

		return redirect()->route('admin.categories.index');
	}

	/**
	 * @param string $slug
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function destroy($slug)
	{
		$category = $this->category->bySlug($slug);
		$category_name = $category->name;
		$category->delete();

		$message = trans(
			'notify.success', [
				'model' => 'Categorie',
				'name' => $category_name,
				'action' =>'deleted'
			]
		);
		session()->flash('notify', ['success', $message]);

		return redirect()->route('admin.categories.index');
	}

	/**
	 * @param string $slug
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function restore($slug)
	{
		$category = $this->category->withTrashed()->bySlug($slug);
		$category_name = $category->name;
		$category->restore();

		$message = trans(
			'notify.success', [
				'model' => 'Category',
				'name' => $category_name,
				'action' =>'restored'
			]
		);
		session()->flash('notify', ['success', $message]);

		return redirect()->route('admin.categories.index');
	}

	// Helper methods

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
			$category->slug = $this->blogify->makeSlug('categories', 'slug', true);
		}

		$category->name = $request->name;
		$category->save();

		return $category;
	}


}