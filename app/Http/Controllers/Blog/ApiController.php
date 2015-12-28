<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Database\DatabaseManager;
use Illuminate\Http\Request;
use App\Exceptions\BlogifyException;
use Illuminate\Contracts\Cache\Repository as Cache;
use Carbon\Carbon;
use App\Post;
use App\Tag;

class ApiController extends AdminController
{

    /**
     * @var \App\Post
     */
    protected $post;

    /**
     * Holds the base slug
     *
     * @var string
     */
    protected $base_slug;

    /**
     * @param \App\Post $post
     */
    public function __construct(Post $post)
    {
	    parent::__construct();
        $this->post = $post;
    }

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
    public function sort(
        $table,
        $column,
        $order,
        $trashed = false,
        DatabaseManager $db
    ) {
        $db = $db->connection();
        $data = $db->table($table);

        // Check for trashed data
        $data = $trashed ? $data->whereNotNull('deleted_at') : $data->whereNull('deleted_at');

        if ($table == 'users') {
            $data = $data->join('roles', 'users.role_id', '=', 'roles.id');
        }

        if ($table == 'posts') {
            $data = $data->join('statuses', 'posts.status_id', '=', 'statuses.id');
        }

        $data = $data
            ->orderBy($column, $order)
            ->paginate($this->config->items_per_page);

        return $data;
    }

    /**
     * Check if a given slug already exists
     * and when it exists generate a new one
     *
     * @param string $slug
     * @return string
     */
    public function checkIfSlugIsUnique($slug)
    {
        $i = 0;
        $this->base_slug = $slug;

        while ($this->post->whereSlug($slug)->get()->count() > 0) {
            $i++;
            $slug = "$this->base_slug-$i";
        }

        return $slug;
    }

    /**
     * Save the current post in the cache
     *
     * @param \Illuminate\Contracts\Cache\Repository $cache
     * @param \Illuminate\Http\Request $request;
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function autoSave(Cache $cache, Request $request)
    {
        try {
            $slug = $this->auth_user->slug;
            $cache->put(
                "autoSavedPost-$slug",
                $request->all(),
                Carbon::now()->addHours(2)
            );
        } catch (BlogifyException $exception) {
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
        return $tag->bySlug($slug);
    }


}