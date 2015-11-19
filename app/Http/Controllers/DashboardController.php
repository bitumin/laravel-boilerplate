<?php

namespace App\Http\Controllers;

use App\Budget;
use App\ClientType;
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

    public function ProjectCalculatorPreviewResults()
    {
//    Example 1:
//    ----------
//    $pdf = App::make('dompdf.wrapper');                 //passing a view (without the facade)
//    $pdf->loadHTML('<h1>Test</h1>');                    //passing html code
//    return $pdf->stream();                              //PDF to stream (browser) example
//
//    Example 2:
//    ----------
//    $pdf = PDF::loadView('pdf.invoice', $data);         //passing a view and data into it (with the facade)
//    return $pdf->download('invoice.pdf');               //PDF to file (download) example:
//
//    Example 3:
//    ----------
//    return PDF::loadFile(public_path().'/myfile.html')  //passing a file
//      ->save('/path-to/my_stored_file.pdf')             //PDF to file (store as file)
//      ->stream('download.pdf');
//
//    Example 4:
//    ----------
//    PDF::loadHTML($html)                                //passing an html file
//        ->setPaper('a4')                                //set paper size
//        ->setOrientation('landscape')                   //set page orientation
//        ->setWarnings(false)                            //disable warnings
//        ->save('myfile.pdf')
//
//    How to make a page break for the pdf
//    ------------------------------------
//    <style>
//        .page-break {
//                page-break-after: always;
//        }
//    </style>
//    <div class="page-break"></div>

        $input = \Request::all();

        $tasks = [];
        $products = [];

        //gather the tasks and products/services data
        foreach($input as $key => $value) {
            $explodedKey = explode('-', $key);
            if(empty($explodedKey[1])) //filter the row models with empty data
                continue;

            if($explodedKey[0] === 'taskWorkerId') {
                $newTask = new \App\Lib\Task();
                $newTask->set(['currencyUnit'=>$input['currencyUnit']]);
            }
            if(isset($newTask))
                $newTask->set([$explodedKey[0]=>$value]);
            if($explodedKey[0] === 'taskHours')
                array_push($tasks,$newTask);

            if($explodedKey[0] === 'productDescription') {
                $newProduct = new \App\Lib\Product();
                $newProduct->set(['currencyUnit'=>$input['currencyUnit']]);
            }
            if(isset($newProduct))
                $newProduct->set([$explodedKey[0]=>$value]);
            if($explodedKey[0] === 'productPriceMargin')
                array_push($products,$newProduct);
        }

        //calculate total workers cost and total products cost
        $totalTasksCost = 0.00;
        $totalProductsCost = 0.00;
        $totalCost = 0.00;

        foreach($tasks as $task)
            $totalTasksCost += $task->cost();
        foreach($products as $product)
            $totalProductsCost += $product->cost();

        $totalCost = $totalTasksCost + $totalProductsCost;

        //calculate each workers wage
        $workersWages = [];

        foreach($tasks as $task) {
            if(!isset($workersWages[$task->taskWorkerId])) {
                $workersWages[$task->taskWorkerId] = [
                    'name' => User::where('id',$task->taskWorkerId)->pluck('name'),
                    'wage' => 0.00
                ];
            }
            $workersWages[$task->taskWorkerId]['wage'] += $task->taskCost;
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

        //caltculate number of associates (shareholders/founders) participating in the projec
        $nAssociates = 0;
        foreach($workersWages as $workerId => $wage) {
            $worker = User::where('id',$workerId)->first();
            if($worker->is('founder') || $worker->is('shareholder'))
                ++$nAssociates;
        }

        //re-calculate shareholders wage and get the names of all the workers
        if(count($nAssociates)) {
            foreach($workersWages as $workerId => $data) {
                $worker = User::where('id', $workerId)->first();
                if($worker->is('founder') || $worker->is('shareholder'))
                    $workersWages[$workerId]['wage'] = $data['wage'] + ($profit / $nAssociates);
            }
        }

        //output wages and products costs with numeric format
        foreach($workersWages as $workerId => $data)
            $workersWages[$workerId]['wageOutput'] = number_format($data['wage'],2,',','.').' '.$input['currencyUnit'];

        return \Response::json([
            'clientName'        => $input['clientName'],
            'tasks'             => $tasks,
            'totalTasks'        => number_format($totalTasksCost,2,',','.').' '.$input['currencyUnit'],
            'wages'             => $workersWages,
            'products'          => $products,
            'totalProducts'     => number_format($totalProductsCost,2,',','.').' '.$input['currencyUnit'],
            'totalCost'         => number_format($totalCost,2,',','.').' '.$input['currencyUnit'],
            'commission_margin' => number_format($commissionMargin,2,',','.').' %',
            'surcharge'         => number_format($surcharge,2,',','.').' %',
            'commission'        => number_format($commission,2,',','.').' '.$input['currencyUnit'],
            'profit'            => number_format($profit,2,',','.').' '.$input['currencyUnit'],
            'taxBase'           => number_format($taxBase,2,',','.').' '.$input['currencyUnit'],
            'irpf'              => number_format($irpf*100,2,',','.').' %',
            'taxes'             => number_format($taxes,2,',','.').' '.$input['currencyUnit'],
            'price'             => number_format($price,2,',','.').' '.$input['currencyUnit'],
            'associates'        => $nAssociates
        ],200);
    }

    public function ProjectCalculatorGenerateReport() {
        $data = json_decode(json_encode($this->ProjectCalculatorPreviewResults()->getData()), true); //json response to array

        $today = Carbon::today()->toDateString();

        //assign new report id
        $report = Report::create();
        $reportId = sprintf('%07d', $report->id);

        //pass report id and today's date to data array
        $data['reportId'] = $reportId;
        $data['today'] = $today;

        return PDF::loadView('pdfTemplates.internalReport', $data)
            ->stream('report_'.$reportId.'_'.$today.'.pdf');
    }

    public function ProjectCalculatorGenerateBudget() {

        $data = json_decode(json_encode($this->ProjectCalculatorPreviewResults()->getData()), true); //json response to array

        $today = Carbon::today()->toDateString();

        //assign new budget id
        $budget = Budget::create();
        $budgetId = sprintf('%07d', $budget->id);

        //pass budget id and today's date to data array
        $data['budgetId'] = $budgetId;
        $data['today'] = $today;

        return PDF::loadView('pdfTemplates.budget', $data)
            ->stream('budget_'.$budgetId.'_'.$today.'.pdf');
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
