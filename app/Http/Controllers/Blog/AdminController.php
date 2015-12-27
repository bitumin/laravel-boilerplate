<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
	protected $redirectPath = '/admin';

	/**
	 * @var \App\User
	 */
	protected $auth_user;

	public function __construct() {
		$this->middleware('auth');

		$this->auth_user = \Auth::check() ? \Auth::user() : false;
	}
}
