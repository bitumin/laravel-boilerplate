<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use App\Role;

class HasAdminOrAuthorRole
{

    /**
     * The Guard implementation.
     *
     * @var \Illuminate\Contracts\Auth\Guard
     */
    protected $auth;

    /**
     * @var \App\Role
     */
    private $role;

    /**
     * Create a new filter instance.
     *
     * @param \App\Role $role
     * @param \Illuminate\Contracts\Auth\Guard $auth
     */
    public function __construct(Guard $auth, Role $role)
    {
        $this->auth = $auth;
        $this->role = $role;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
	    if($this->auth->user()->is('Owner') || $this->auth->user()->is('Author'))
		    return $next($request);

	    return redirect()->route('blog.admin.dashboard');
    }

}
