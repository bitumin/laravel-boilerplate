<?php

namespace App\Http\Controllers;

use App\Http\Requests\Request;
use App\Lib\Geo;
use App\Location;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class ExamplesController extends Controller
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

    public function getTemplateSbCreativeIndex()
    {
        return view('templates.sb-creative.index');
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

   public function getTemplateCleanBlogIndex()
    {
        return view('templates.clean-blog.index');
    }

    public function getTemplateCleanBlogPost()
    {
        return view('templates.clean-blog.post');
    }

    public function getTemplateCleanBlogAbout()
    {
        return view('templates.clean-blog.about');
    }

    public function getTemplateCleanBlogContact()
    {
        return view('templates.clean-blog.contact');
    }

    public function getTemplateAgencyIndex()
    {
        return view('templates.agency.index');
    }

    public function getTemplateFreelancerIndex()
    {
        return view('templates.freelancer.index');
    }

    public function getTemplateShopIndex()
    {
        return view('templates.shop.index');
    }

    public function getTemplateShopItem()
    {
        return view('templates.shop.item');
    }

    public function getTemplateBusinessCasualIndex()
    {
        return view('templates.business-casual.index');
    }

    public function getTemplateBusinessCasualAbout()
    {
        return view('templates.business-casual.about');
    }

    public function getTemplateBusinessCasualBlog()
    {
        return view('templates.business-casual.blog');
    }

    public function getTemplateBusinessCasualContact()
    {
        return view('templates.business-casual.contact');
    }

    public function getTemplateStylishPortfolioIndex()
    {
        return view('templates.stylish-portfolio.index');
    }

    public function getTemplateDesignIndex()
    {
        return view('templates.design.index');
    }

    public function getTemplateArchitectIndex()
    {
        return view('templates.architect.index');
    }

    public function getTemplateArchitectProjects()
    {
        return view('templates.architect.projects');
    }

    public function getTemplateArchitectDetail()
    {
        return view('templates.architect.detail');
    }

    public function getTemplateArchitectMedia()
    {
        return view('templates.architect.media');
    }

    public function getTemplateArchitectAbout()
    {
        return view('templates.architect.about');
    }

    public function getTemplateArchitectContact()
    {
        return view('templates.architect.contact');
    }

    public function getTemplateStudioIndex()
    {
        return view('templates.studio.index');
    }

    public function getTemplateResumeIndex()
    {
        return view('templates.resume.index');
    }

    public function getTemplateResumeBlog()
    {
        return view('templates.resume.blog');
    }

    public function getTemplateResumeBlogdetail()
    {
        return view('templates.resume.blogdetail');
    }

    public function getTemplateSprintIndex()
    {
        return view('templates.sprint.index');
    }

    public function getTemplatePipleIndex()
    {
        return view('templates.piple.index');
    }

    public function getTemplatePiplepost()
    {
        return view('templates.piple.post');
    }

    public function getTemplateLucyIndex()
    {
        return view('templates.lucy.index');
    }

    public function getTemplateJohnIndex()
    {
        return view('templates.john.index');
    }

    public function getTemplateComingsoonIndex()
    {
        return view('templates.comingsoon.index');
    }

    public function getTemplateKitchenIndex()
    {
        return view('templates.kitchen.index');
    }

    public function getTemplateCloudIndex()
    {
        return view('templates.cloud.index');
    }

    public function getTemplateCloudBlog()
    {
        return view('templates.cloud.blog');
    }
}
