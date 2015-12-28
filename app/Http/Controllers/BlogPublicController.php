<?php

namespace App\Http\Controllers;

class BlogPublicController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest');
	}


}