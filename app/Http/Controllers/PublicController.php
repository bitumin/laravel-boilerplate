<?php

namespace App\Http\Controllers;

class PublicController extends Controller
{
    public function getHome()
    {
        return view('welcome');
    }
}
