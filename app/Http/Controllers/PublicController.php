<?php

namespace App\Http\Controllers;

class PublicController extends Controller
{
    public function getHome()
    {
        return view('welcome');
    }

    public function exampleBasic()
    {
        return view('examples.basic');
    }

    public function exampleCode()
    {
        return view('examples.code');
    }

    public function exampleFlotCharts()
    {
        return view('examples.flot_charts');
    }

    public function exampleMorrisCharts()
    {
        return view('examples.morris_charts');
    }

    public function exampleTimeline()
    {
        return view('examples.timeline');
    }

    public function exampleTables()
    {
        return view('examples.tables');
    }

    public function exampleDashboard()
    {
        return view('examples.dashboard');
    }
}
