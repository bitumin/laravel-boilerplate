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
        return view('examples.change_language');
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

    public function exampleGeolocatedSearch()
    {
        return view('examples.geolocated-search');
    }

    public function postGeolocatedSearch()
    {
        $validator =  Validator::make($input = Input::all(), [
            'address' => 'required|string',
            'minDistance' => 'required|numeric|min:0|max:1000',
            'maxDistance' => 'required|numeric|min:0|max:1000',
        ]);
        if($validator->fails())
            return Response::json([],500);

        $geocoded = Geo::geocodeAddress($input['address']);
        if(!$geocoded)
            return Response::json([],500);

        $results = Geo::filterRowsByDistance($geocoded['lat'], $geocoded['lng'], 'locations', $input['minDistance'], $input['maxDistance']);

        return Response::json($results,200);
    }

    public function getTemplateSbCreative()
    {
        return view('templates.sb-creative');
    }

    public function exampleToastr()
    {
        session(['status' => 'You look good today!']);
        session(['info' => 'Once upon a time...']);
        session(['success' => 'Fuck yeah!']);
        session(['warning' => 'Take care you fool!']);
        session(['error' => 'Something went wrong!']);

        return view('examples.toastr');
    }

    public function exampleCookiesAlert()
    {
        return view('examples.cookies_alert');
    }

}
