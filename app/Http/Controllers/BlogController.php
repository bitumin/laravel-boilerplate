<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use App\Comment;
use Carbon\Carbon;
use App\Http\Requests\CommentRequest;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\DatabaseManager;

class BlogController extends Controller
{
    protected $post;
	protected $category;
    protected $tag;
	protected $comment;
	protected $auth;
    protected $db;
    protected $config;

	/**
	 * @param Post $post
	 * @param Category $category
	 * @param Tag $tag
	 * @param DatabaseManager $db
	 * @param Comment $comment
	 * @param Guard $auth
	 */
    public function __construct(
	    Post $post, Category $category, Tag $tag, DatabaseManager $db,
	    Comment $comment, Guard $auth
    ) {
        $this->post = $post;
        $this->category = $category;
        $this->tag = $tag;
	    $this->comment = $comment;
	    $this->auth = $auth;
        $this->db = $db;
        $this->config = json_decode(json_encode(config('blog')));

        $this->middleware('App\Http\Middleware\ProtectedPost',
	        ['only' => 'showBlog']
        );
    }

    /**
     * @return \Illuminate\View\View
     */
    public function indexBlog()
    {
        $data = $this->getOverviewData();
        $data['posts'] = $this->post
	        ->forPublic()
	        ->orderBy('publish_date', 'DESC')
	        ->paginate($this->config->items_per_page);

        return view('blog.index', $data);
    }

    /**
     * @param $slug
     * @return \Illuminate\View\View
     */
    public function showBlog($slug)
    {
        $data = $this->getOverviewData();

        $data['post'] = $this->post
	        ->findBySlugOrFail($slug);

        return view('blog.show', $data);
    }

    /**
     * @param $year
     * @param $month
     * @return \Illuminate\View\View
     */
    public function archiveBlog($year, $month)
    {
        $data = $this->getOverviewData();
        $data['posts'] = $this->post
	        ->forPublic()
            ->where($this->db->raw('MONTHNAME(publish_date)'), '=', $month)
            ->where($this->db->raw('YEAR(publish_date)'), '=', $year)
            ->orderBy('publish_date', 'DESC')
            ->paginate($this->config->items_per_page);

        return view('blog.index', $data);
    }

    /**
     * @param $category
     * @return \Illuminate\View\View
     */
    public function categoryBlog($category)
    {
        $category_id = $this->category
	        ->whereName($category)
	        ->first()
	        ->id;
        $data = $this->getOverviewData();

        $data['posts'] = $this->post
	        ->whereCategoryId($category_id)
	        ->forPublic()
	        ->orderBy('publish_date', 'DESC')
	        ->paginate($this->config->items_per_page);

        return view('blog.index', $data);
    }

    /**
     * @param $slug
     * @return \Illuminate\View\View
     */
    public function askPassword($slug)
    {
        $data = $this->getOverviewData();
        $data['slug'] = $slug;

        return view('blog-mails.password', $data);
    }

    /**
     * @return array
     */
    private function getOverviewData()
    {
        $archive = $this->post
	        ->where('publish_date', '<=', date('Y-m-d H:i:s'))
	        ->orderBy('publish_date', 'DESC')
	        ->get()
	        ->groupBy(function($query){
                return Carbon::parse($query->publish_date)->format('F Y');
            });

        $data = [
            'categories' => $this->category->all(),
            'tags'  => $this->tag->all(),
            'archives' => $archive,
        ];

        return $data;
    }

	/*
	 * Comments
	 */

	public function storeComments(CommentRequest $request)
	{
		$comment = new Comment;
		$comment->content = $request->comment;
		$comment->user_id = $this->auth->user()->id;
		$comment->post_id = $this->post->findBySlugOrFail($request->post)->id;
		$comment->revised = ($this->config->approve_comments_first) ? 1 : 2;
		$comment->save();

		session()->flash('notify', [ 'success', 'Your comment has been added' ] );

		return back();
	}

	/**
	 * @param string $revised
	 * @return \Illuminate\View\View
	 */
	public function indexComments($revised = "pending")
	{
		$revised = $this->checkRevised($revised);
		if ($revised === false)
			abort(404);

		$data = [
			'comments' => $this->comment
				->byRevised($revised)
				->paginate($this->config->items_per_page),
			'revised' => $revised,
		];

		return view('blog.dashboard.comments.index', $data);
	}

	/**
	 * @param string $slug
	 * @param string $new_revised
	 * @return \Illuminate\Http\RedirectResponse
	 */
	public function changeStatus($slug, $new_revised)
	{
		$revised = $this->checkRevised($new_revised);
		if ($revised === false)
			abort(404);

		$comment = $this->comment->findBySlugOrFail($slug);
		$comment->revised = $revised;
		$comment->save();

		session()->flash('notify', ['success', trans(
			'notify.comment_success',
			['action' => $new_revised]
		)]);

		return redirect()->route('blog.admin.comments.index');
	}

	/**
	 * Check if the given revised
	 * is valid
	 *
	 * @param string $revised
	 * @return int|bool
	 */
	private function checkRevised($revised)
	{
		$allowed = [1 => 'pending', 2 => 'approved', 3 => 'disapproved'];

		return array_search($revised, $allowed);
	}


}