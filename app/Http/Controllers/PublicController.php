<?php

namespace App\Http\Controllers;

use App\Http\Requests\Request;
use App\Lib\Geo;
use App\Location;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class PublicController extends Controller
{
    public function getHome()
    {
        return view('basic');
    }

}
