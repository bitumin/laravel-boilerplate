<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use App\Post;

class CanEditPost
{

    /**
     * The Guard implementation.
     *
     * @var \Illuminate\Contracts\Auth\Guard
     */
    protected $auth;

    /**
     * @var \App\Post
     */
    protected $post;

    /**
     * Create a new filter instance.
     *
     * @param \App\Post $post
     * @param \Illuminate\Contracts\Auth\Guard $auth
     */
    public function __construct(Guard $auth, Post $post)
    {
        $this->auth = $auth;
        $this->post = $post;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (! $this->checkIfUserCanEditPost($request))
            return redirect()->route('blog.admin.dashboard');

        return $next($request);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return bool
     */
    private function checkIfUserCanEditPost($request)
    {
        $post = $this->post->findBySlugOrFail($request->segment(3));
        $user_id = $this->auth->user()->getAuthIdentifier();

        if (
            $user_id != $post->user_id &&
            $user_id != $post->reviewer_id &&
            ! $this->auth->user()->is('Owner')
        ) {
            return false;
        }

        return true;
    }

}
