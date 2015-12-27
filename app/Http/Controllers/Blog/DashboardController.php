<?php

namespace App\Http\Controllers\Blog;

use App\User;
use App\Comment;
use App\Post;

class DashboardController extends AdminController
{
    /**
     * @var \App\User
     */
    protected $user;

    /**
     * @var \App\Post
     */
    protected $post;

    /**
     * @var \App\Comment
     */
    protected $comment;

    /**
     * Holds the data for the dashboard
     *
     * @var array
     */
    protected $data = [];


    /**
     * @param \App\User $user
     * @param \App\Post $post
     * @param \App\Comment $comment
     */
    public function __construct(User $user, Post $post, Comment $comment) {
	    parent::__construct();

        $this->user = $user;
        $this->post = $post;
        $this->comment = $comment;

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

    ///////////////////////////////////////////////////////////////////////////
    // View methods
    ///////////////////////////////////////////////////////////////////////////

    /**
     * Show the dashboard view
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view("blog-admin.home", $this->data);
    }

    ///////////////////////////////////////////////////////////////////////////
    // Helper methods
    ///////////////////////////////////////////////////////////////////////////

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
	        ->where('publish_date', '<=', date('Y-m-d H:i:s'))->forAuthor()->count();
        $this->data['pending_review_posts'] = $this->post->whereStatusId(2)->forAuthor()->count();
        $post_ids = $this->post->forAuthor()->lists('id');
        $this->data['pending_comments'] = $this->comment->byRevised(1)->whereIn('post_id', $post_ids)->count();
    }

    /**
     * @return void
     */
    private function buildDataArrayForReviewer()
    {
        $this->data['pending_review_posts'] = $this->post->whereStatusId(2)->forReviewer()->count();
    }

}