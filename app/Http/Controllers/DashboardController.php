<?php

namespace App\Http\Controllers;

use App\Budget;
use App\ClientType;
use App\Lib\ProjectManager\Project;
use App\ProjectCommission;
use App\Report;
use App\User;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade as PDF;

class DashboardController extends Controller
{
    protected $redirectPath = '/dashboard';

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getDashboard()
    {
        return view('dashboard.home');
    }

    public function getSettings()
    {
        return view('dashboard.settings');
    }

	public function getProfile()
	{
		$me = \Auth::user();

		return view('dashboard.profile',compact('me'));
	}

    public function postProfileUpdateInfo()
    {
        $input = \Request::all();
        $rules = ['name' => 'required|max:255', 'email' => 'sometimes|email|max:255'];
        $validator = Validator::make($input,$rules);
        if($validator->fails())
            return \Response::json([],400);

        $me = \Auth::user();
        $me->name = $input['name'];
        $me->email = $input['email'];

        if($me->save())
            return \Response::json([],200);
        return \Response::json([],400);
    }

    public function postProfileUpdatePassword()
    {
        $input = \Request::all();
        $rules = ['password' => 'required|confirmed|min:6'];
        $validator = Validator::make($input,$rules);
        if($validator->fails())
            return \Response::json([],400);

        $me = \Auth::user();
        $me->password = bcrypt($input['password']);

        if($me->save())
            return \Response::json([],200);
        return \Response::json([],400);
    }

}
