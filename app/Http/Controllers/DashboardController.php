<?php

namespace App\Http\Controllers;

use App\ClientType;
use App\ProjectCommission;
use App\User;
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

    public function ProjectCalculatorCalculate()
    {
        $input = \Request::all();

        $tasks = [];
        $products = [];

        //gather the tasks and products/services info and calculate its costs
        foreach($input as $key => $value) {
            $explodedKey = explode('-', $key);

            if($explodedKey[0] === 'taskWorkerId')
                $newTask = new \App\Lib\Task();
            if(isset($newTask))
                $newTask->set([$explodedKey[0]=>$value]);
            if($explodedKey[0] === 'taskHours') {
                array_push($tasks,$newTask);
            }

            if($explodedKey[0] === 'productDescription')
                $newProduct = new \App\Lib\Product();
            if(isset($newProduct))
                $newProduct->set([$explodedKey[0]=>$value]);
            if($explodedKey[0] === 'productPriceMargin') {
                array_push($products,$newProduct);
            }
        }

        //calculate total workers cost and total products cost
        $totalTasksCost = 0.00;
        $totalProducstCost = 0.00;
        $totalCost = 0.00;

        foreach($tasks as $task)
            $totalTasksCost += $task->cost();
        foreach($products as $product)
            $totalProducstCost += $product->cost();

        $totalCost = $totalTasksCost + $totalProducstCost;

        //calculate each workers wage
        $workersWages = [];

        foreach($tasks as $task) {
            if(!isset($workersWages[$task->taskWorkerId]))
                $workersWages[$task->taskWorkerId] = 0.00;
            $workersWages[$task->taskWorkerId] += $task->taskCost;
        }

        //assign % comercial commission and % surcharge (profit margin)
        $commissionMargin = floatval(
            ProjectCommission::where('project_source_id', $input['projectSourceId'])
            ->where('project_type_id', $input['projectTypeId'])
            ->pluck('commission')
        );
        $surcharge = floatval(
            ClientType::where('id',$input['clientTypeId'])->pluck('profit_margin')
        );

        //calculate source commission
        $commission = $totalCost * ($commissionMargin/100);

        //calculate profit
        $profit = $totalCost * ($surcharge/100);

        //calculate tax base (base imponible)
        $taxBase = $totalCost + $commission + $profit;

        //calculate taxes
        $irpf = ($input['irpf-1']/100) - ($input['irpf-2']/100);
        $taxes = $taxBase * $irpf;

        //calculate final price
        $price = $taxBase + $taxes;

        //calculate number of associates (shareholders/founders) participating in the project
        $nAssociates = 0;
        foreach($workersWages as $workerId => $wage) {
            $worker = User::where('id',$workerId);
            if($worker->is('founder') || $worker->is('shareholder'))
                ++$nAssociates;
        }

        //re-calculate shareholders wage
        if(count($nAssociates)) {
            foreach ($workersWages as $workerId => $wage) {
                $worker = User::where('id', $workerId);
                if ($worker->is('founder') || $worker->is('shareholder'))
                    $workersWages[$workerId] = $wage + ($profit / $nAssociates);
            }
        }

        return \Response::json([
            'tasks'             => $tasks,
            'products'          => $products,
            'cost'              => $totalCost,
            'wages'             => $workersWages,
            'commission_margin' => number_format($commissionMargin,2,',','.'),
            'surcharge'         => number_format($surcharge,2,',','.'),
            'commission'        => number_format($commission,2,',','.'),
            'profit'            => number_format($profit,2,',','.'),
            'taxBase'           => number_format($taxBase,2,',','.'),
            'irpf'              => number_format($irpf,2,',','.'),
            'taxes'             => number_format($taxes,2,',','.'),
            'price'             => number_format($price,2,',','.'),
            'associates'        => $nAssociates
        ],200);

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
        $me->password = $input['password'];

        if($me->save())
            return \Response::json([],200);
        return \Response::json([],400);
    }

}
