<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    protected $redirectPath = '/dashboard';

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getDashboard()
    {
        return view('dashboard');
    }

    public function getProfile()
    {
        if(!Auth::user()->may('manage-profile'))
            return redirect($this->redirectPath);

        $me = Auth::user();

        return view('dashboard.profile',compact('me'));
    }

    public function getSettings()
    {
        if(Auth::user()->may('manage-settings'))
            return view('dashboard.settings');
        return redirect($this->redirectPath);
    }

    public function getProjectCalculator()
    {
        if(Auth::user()->may('access-project-calculator'))
            return view('dashboard.calculator');
        return redirect($this->redirectPath);
    }

    public function postProfileUpdateInfo()
    {

    }

    public function postProfileUpdatePassword()
    {

    }

}
