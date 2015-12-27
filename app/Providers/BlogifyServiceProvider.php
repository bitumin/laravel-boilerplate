<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BlogifyServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider
     */
    public function register()
    {
        $this->registerMiddleware();
    }

    /**
     * @return void
     */
    private function registerMiddleware()
    {
        $this->app['router']->middleware('BlogifyAdminAuthenticate', 'App\Http\Middleware\BlogifyAdminAuthenticate');
        $this->app['router']->middleware('BlogifyVerifyCsrfToken', 'App\Http\Middleware\BlogifyVerifyCsrfToken');
        $this->app['router']->middleware('CanEditPost', 'App\Http\Middleware\CanEditPost');
        $this->app['router']->middleware('DenyIfBeingEdited', 'App\Http\Middleware\DenyIfBeingEdited');
        $this->app['router']->middleware('BlogifyGuest', 'App\Http\Middleware\Guest');
        $this->app['router']->middleware('HasAdminOrAuthorRole', 'App\Http\Middleware\HasAdminOrAuthorRole');
        $this->app['router']->middleware('HasAdminRole', 'App\Http\Middleware\HasAdminRole');
        $this->app['router']->middleware('RedirectIfAuthenticated', 'App\Http\Middleware\RedirectIfAuthenticated');
        $this->app['router']->middleware('IsOwner', 'App\Http\Middleware\IsOwner');
        $this->app['router']->middleware('CanViewPost', 'App\Http\Middleware\CanViewPost');
        $this->app['router']->middleware('ProtectedPost', 'App\Http\Middleware\ProtectedPost');
        $this->app['router']->middleware('ConfirmPasswordChange', 'App\Http\Middleware\ConfirmPasswordChange');
    }
}
