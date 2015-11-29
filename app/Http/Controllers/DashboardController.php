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
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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

    public function projectManagerCalculate()
    {
        $input = \Request::all();
        $project = new Project($input);
        $results = $project->outputFormatted();

        return \Response::json($results,200);
    }

    public function projectCalculatorSaveProject()
    {
        $input = \Request::all();
        $project = new Project($input);

        if($newProjectId = $project->saveProject())
            return \Response::json(['id'=>$newProjectId],200);
        return \Response::json([],400);
    }

    public function projectCalculatorTestReport() {
        $input = \Request::all();
        $project = new Project($input);
        $data = $project->outputFormatted();

        $today = Carbon::today();
        $todayStr = $today->format('Ymdhis');
        $data['today'] = $today->format('d/m/Y');
        $data['id'] = sprintf('%07d', 'test');

        return PDF::loadView('pdfTemplates.internalReport', $data)
            ->stream('report_'.$data['id'].'_'.$todayStr.'.pdf');
    }

    public function projectCalculatorTestBudget() {
        $input = \Request::all();
        $project = new Project($input);
        $data = $project->outputFormatted();

        $today = Carbon::today();
        $todayStr = $today->format('Ymdhis');
        $data['today'] = $today->format('d/m/Y');
        $data['id'] = sprintf('%07d', 'test');

        return PDF::loadView('pdfTemplates.budget', $data)
            ->stream('budget_'.$data['id'].'_'.$todayStr.'.pdf');
    }

    public function projectCalculatorOpenReport() {
        //get project id

        //get associated report data

        $today = Carbon::today();
        $todayStr = $today->format('Ymdhis');
        $data['today'] = $today->format('d/m/Y');

        return PDF::loadView('pdfTemplates.internalReport', $data)
            ->stream('report_'.$data['id'].'_'.$todayStr.'.pdf');
    }

    public function projectCalculatorOpenBudget() {
        //get project id

        //get associated budget data

        $today = Carbon::today();
        $todayStr = $today->format('Ymdhis');
        $data['today'] = $today->format('d/m/Y');

        return PDF::loadView('pdfTemplates.budget', $data)
            ->stream('budget_'.$data['id'].'_'.$todayStr.'.pdf');
    }

    public function postProfileUpdateInfo()
    {
        $input = \Request::all();
        $rules = ['name' => 'required|max:255', 'email' => 'sometimes|email|max:255'];
        $validator = Validator::make($input,$rules);
        if($validator->fails())
            return \Response::json([],400);

        $me = Auth::user();
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

        $me = Auth::user();
        $me->password = bcrypt($input['password']);

        if($me->save())
            return \Response::json([],200);
        return \Response::json([],400);
    }

}
