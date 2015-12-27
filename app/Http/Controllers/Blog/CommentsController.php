<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Contracts\Auth\Guard;
use App\Http\Requests\Blog\CommentRequest;
use App\Comment;
use App\Post;
use App\Http\Controllers\Controller;

class CommentsController extends Controller
{

	/**
	 * @var \App\Comment
	 */
	protected $comment;

	/**
	 * @var mixed
	 */
	protected $config;

	/**
	 * @var Post
	 */
	protected $post;

	/**
	 * @var Guard
	 */
	protected $auth;

	/**
	 * @param Comment $comment
	 * @param Post $post
	 * @param Guard $auth
	 */
	public function __construct(Comment $comment, Post $post, Guard $auth)
	{
		$this->comment = $comment;
		$this->config = json_decode(json_encode(config('blogify')));
		$this->post = $post;
		$this->auth = $auth;
	}

	public function store(CommentRequest $request)
	{
		$comment = new Comment;
		$comment->content = $request->comment;
		$comment->user_id = $this->auth->user()->id;
		$comment->post_id = $this->post->byHash($request->post)->id;
		$comment->revised = ($this->config->approve_comments_first) ? 1 : 2;
		$comment->save();

		session()->flash('notify', [ 'success', 'Your comment has been added' ] );

		return back();
	}

    ///////////////////////////////////////////////////////////////////////////
    // View methods
    ///////////////////////////////////////////////////////////////////////////

    /**
     * @param string $revised
     * @return \Illuminate\View\View
     */
    public function index($revised = "pending")
    {
        $revised = $this->checkRevised($revised);
        if ($revised === false) {
            abort(404);
        }

        $data = [
            'comments' => $this->comment
                                ->byRevised($revised)
                                ->paginate($this->config->items_per_page),
            'revised' => $revised,
        ];

        return view('admin.comments.index', $data);
    }


    ///////////////////////////////////////////////////////////////////////////
    // CRUD methods
    ///////////////////////////////////////////////////////////////////////////

    /**
     * @param string $hash
     * @param string $new_revised
     * @return \Illuminate\Http\RedirectResponse
     */
    public function changeStatus($hash, $new_revised)
    {
        $revised = $this->checkRevised($new_revised);
        if ($revised === false) {
            abort(404);
        }

        $comment = $this->comment->byHash($hash);
        $comment->revised = $revised;
        $comment->save();

        $message = trans(
            'notify.comment_success',
            ['action' => $new_revised]
        );
        session()->flash('notify', ['success', $message]);

        return redirect()->route('admin.comments.index');
    }

    ///////////////////////////////////////////////////////////////////////////
    // Helper methods
    ///////////////////////////////////////////////////////////////////////////

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