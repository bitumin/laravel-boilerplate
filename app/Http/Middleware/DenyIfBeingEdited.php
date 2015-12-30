<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Contracts\Auth\Guard;
use App\Post;

class DenyIfBeingEdited
{

    /**
     * Holds the Guard Contract
     *
     * @var \Illuminate\Contracts\Auth\Guard
     */
    protected $auth;

    /**
     * @var \App\Post
     */
    protected $post;

    /**
     * @var \App\User
     */
    protected $user;

    /**
     * Create a new filter instance.
     *
     * @param \Illuminate\Contracts\Auth\Guard $auth
     * @param \App\Post $post
     * @param \App\User $user
     */
    public function __construct(Guard $auth, Post $post, User $user)
    {
        $this->auth = $auth;
        $this->post = $post;
        $this->user = $user;
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
        $slug = $request->segment(3);
        $post = $this->post->whereSlug($slug);

        if (
            $post->being_edited_by != null &&
            $post->being_edited_by != $this->auth->user()->getAuthIdentifier()
        ) {
            $user = $this->user->find($post->being_edited_by)->fullName;

            session()->flash('notify',
	            ['danger', trans('posts.notify.being_edited', ['name' => $user])]
            );

	        return redirect()->route('blog.admin.posts.index');
        }

        return $next($request);
    }

}
