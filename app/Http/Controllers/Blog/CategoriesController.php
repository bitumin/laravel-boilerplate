<?php

namespace App\Http\Controllers\Blog;

use App\Category;
use App\Http\Requests\Blog\CategoryRequest;

class CategoriesController extends AdminController
{
    /**
     * @var \App\Category
     */
    protected $category;

	/**
	 * @var object
	 */
	protected $config;

    /**
     * @param \App\Category $category
     */
    public function __construct(Category $category) {
	    parent::__construct();
        $this->category = $category;
	    $this->config = json_decode(json_encode(config('blogify')));
    }

    ///////////////////////////////////////////////////////////////////////////
    // View methods
    ///////////////////////////////////////////////////////////////////////////

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
     * @param string $hash
     * @return \Illuminate\View\View
     */
    public function edit($hash)
    {
        $category = $this->category->byHash($hash);

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
     * @param string $hash
     * @param \App\Http\Requests\Blog\CategoryRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($hash, CategoryRequest $request)
    {
        $category = $this->category->byHash($hash);
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
     * @param string $hash
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($hash)
    {
        $category = $this->category->byHash($hash);
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
     * @param string $hash
     * @return \Illuminate\Http\RedirectResponse
     */
    public function restore($hash)
    {
        $category = $this->category->withTrashed()->byHash($hash);
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

    ///////////////////////////////////////////////////////////////////////////
    // Helper methods
    ///////////////////////////////////////////////////////////////////////////

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
            $category->hash = $this->blogify->makeHash('categories', 'hash', true);
        }

        $category->name = $request->name;
        $category->save();

        return $category;
    }

}