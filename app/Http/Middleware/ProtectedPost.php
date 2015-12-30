<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use App\Post;

class ProtectedPost
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
     * @param \Illuminate\Contracts\Auth\Guard $auth
     * @param \App\Post $post
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
	    $providedPassword = bcrypt(\Input::get('password'));
        $post = $this->post->findBySlug($request->segment(3));

	    if ( $post->visibility_id == 2 && $providedPassword !== $post->password )
            return redirect()
                ->route('blog.askPassword', [$post->slug])
                ->with(
                    'wrong_password',
                    'Please provide a valid password to view this post'
                );

        return $next($request);
    }
}
