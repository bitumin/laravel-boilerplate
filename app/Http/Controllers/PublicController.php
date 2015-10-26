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

    public function exampleForms()
    {
        return view('examples.forms');
    }

    public function exampleButtons()
    {
        return view('examples.buttons');
    }

    public function exampleGrid()
    {
        return view('examples.grid');
    }

    public function exampleIcons()
    {
        return view('examples.icons');
    }

    public function exampleNotifications()
    {
        return view('examples.notifications');
    }

    public function examplePanels()
    {
        return view('examples.panels');
    }

    public function exampleTypography()
    {
        return view('examples.typography');
    }

    public function exampleChangeLanguage()
    {
        return view('examples.change-language');
    }

    public function exampleGoogleMaps1()
    {
        return view('examples.gmaps1');
    }

    public function exampleGoogleMaps2()
    {
        return view('examples.gmaps2');
    }

    public function exampleGoogleMaps3()
    {
        return view('examples.gmaps3');
    }

    public function exampleGoogleMaps4()
    {
        return view('examples.gmaps4');
    }

    public function getTemplateSbCreative()
    {
        return view('templates.sb-creative');
    }

}
