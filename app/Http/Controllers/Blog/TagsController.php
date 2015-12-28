<?php

namespace App\Http\Controllers\Blog;

use Input;
use App\Tag;
use App\Http\Requests\Blog\TagUpdateRequest;
use Request;

class TagsController extends AdminController
{

    /**
     * @var \App\Tag
     */
    protected $tag;

    /**
     * Holds the submitted tags
     *
     * @var array
     */
    protected $tags = [];

    /**
     * Hols the tags that are successfully added
     *
     * @var array
     */
    protected $stored_tags = [];

    /**
     * @param \App\Tag $tag
     */
    public function __construct(Tag $tag) {
        parent::__construct();

        $this->tag = $tag;
    }

    ///////////////////////////////////////////////////////////////////////////
    // View methods
    ///////////////////////////////////////////////////////////////////////////

    /**
     * @param string $trashed
     * @return \Illuminate\View\View
     */
    public function index($trashed = null)
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

        return view('admin.tags.index', $data);
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.tags.form');
    }

    /**
     * @param $slug
     * @return \Illuminate\View\View
     */
    public function edit($slug)
    {
        $data = [
            'tag' => $this->tag->bySlug($slug),
        ];

        return view('admin.tags.form', $data);
    }

    ///////////////////////////////////////////////////////////////////////////
    // CRUD methods
    ///////////////////////////////////////////////////////////////////////////

    /**
     * @return $this|array|\Illuminate\Http\RedirectResponse
     */
    public function storeOrUpdate()
    {
        // prepare submitted tag(s)
        $this->fillTagsArray();
        $this->deleteSpacesAtTheBeginningAndEnd();

        // validate tag(s)
        $validation = $this->tag->validate($this->tags);
        if ($validation->fails()) {
            $data = [
                'passed' => false,
                'messages' => $validation->messages(),
            ];

            if (Request::ajax()) {
                return $data;
            }

            return redirect()->back()->withErrors($validation->messages())->withInput();
        }

        // store or update the tag in the db
        $this->storeOrUpdateTags();

        $data = ['passed' => true, 'tags' => $this->stored_tags];
        if (Request::ajax()) {
            return $data;
        }

        $message = trans('notify.success', [
            'model' => 'Tags',
            'name' => $this->getTagNames(),
            'action' =>'created'
        ]);
        session()->flash('notify', ['success', $message]);

        return redirect()->route('admin.tags.index');
    }

    /**
     * @param string $slug
     * @param \App\Http\Requests\Blog\TagUpdateRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($slug, TagUpdateRequest $request)
    {
        $tag = $this->tag->bySlug($slug);
        $tag->name = $request->tags;
        $tag->save();

        $this->tracert->log('tags', $tag->id, $this->auth_user->id, 'update');

        $message = trans('notify.success', [
            'model' => 'Tags', 'name' => $tag->name, 'action' =>'updated'
        ]);
        session()->flash('notify', ['success', $message]);

        return redirect()->route('admin.tags.index');
    }

    /**
     * @param string $slug
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($slug)
    {
        $tag = $this->tag->bySlug($slug);
        $tag->delete();

        $this->tracert->log('tags', $tag->id, $this->auth_user->id, 'delete');

        $message = trans('notify.success', [
            'model' => 'Tags', 'name' => $tag->name, 'action' =>'deleted'
        ]);
        session()->flash('notify', ['success', $message]);

        return redirect()->route('admin.tags.index');
    }

    /**
     * @param string $slug
     * @return \Illuminate\Http\RedirectResponse
     */
    public function restore($slug)
    {
        $tag = $this->tag->withTrashed()->bySlug($slug);
        $tag->restore();

        $message = trans('notify.success', [
            'model' => 'Tag', 'name' => $tag->name, 'action' =>'restored'
        ]);
        session()->flash('notify', ['success', $message]);

        return redirect()->route('admin.tags.index');
    }

    ///////////////////////////////////////////////////////////////////////////
    // Helper methods
    ///////////////////////////////////////////////////////////////////////////

    /**
     * @return void
     */
    private function fillTagsArray()
    {
        $tags = Input::get('tags');
        $this->tags = explode(',', $tags);
    }

    /**
     * @return void
     */
    private function deleteSpacesAtTheBeginningAndEnd()
    {
        foreach ($this->tags as $key => $tag) {
            $this->tags[$key] = trim($tag);
        }
    }

    /**
     * @return void
     */
    private function storeOrUpdateTags()
    {
        foreach ($this->tags as $tag_name) {
            $t = $this->tag->whereName($tag_name)->first();

            if (count($t) > 0) {
                $tag = $t;
            } else {
                $tag = new Tag;
                $tag->slug = $this->blogify->makeSlug('tags', 'slug', true);
            }

            $tag->name = $tag_name;

            $tag->save();
            array_push($this->stored_tags, $tag);
            $this->tracert->log('tags', $tag->id, $this->auth_user->id);
        }
    }

    /**
     * @return string
     */
    private function getTagNames()
    {
        $tags = '';

        foreach ($this->stored_tags as $tag) {
            $tags .= $tag->name.', ';
        }

        return $tags;
    }
}