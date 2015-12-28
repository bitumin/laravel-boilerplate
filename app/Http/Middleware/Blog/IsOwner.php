<?php

namespace App\Http\Middleware\Blog;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use App\User;

class IsOwner
{
    /**
     * The Guard implementation.
     *
     * @var \Illuminate\Contracts\Auth\Guard
     */
    protected $auth;

    /**
     * This is the User model (not any specific user)
     *
     * @var \App\User
     */
    protected $user;

    /**
     * Create a new filter instance.
     *
     * @param \Illuminate\Contracts\Auth\Guard $auth
     * @param \App\User $user
     */
    public function __construct(Guard $auth, User $user)
    {
        $this->auth = $auth;
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
        $user = $this->user->findBySlugOrFail($request->segment(2));

        if ($this->auth->user()->getAuthIdentifier() != $user->id)
            abort(404);

        return $next($request);
    }

}
