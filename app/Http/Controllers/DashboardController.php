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
        if(Auth::user()->may('manage-profile'))
            return view('dashboard.profile');
        return redirect($this->redirectPath);
    }

    public function getSettings()
    {
        if(Auth::user()->may('manage-settings'))
            return view('dashboard.settings');
        return redirect($this->redirectPath);
    }

    public function getUsers()
    {
        if(Auth::user()->may('manage-users'))
            return view('dashboard.users');
        return redirect($this->redirectPath);
    }
}
