<?php

namespace App\Http\Controllers;

use App\Lib\ProjectManager\Project as Project;
use App\Lib\ProjectManager\Expense as Expense;
use App\Lib\ProjectManager\Wage as Wage;
use App\Lib\ProjectManager\Task as Task;
use App\Project as ProjectModel;
use App\Expense as ExpenseModel;
use App\Wage as WageModel;
use App\Task as TaskModel;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;

class ProjectCalculatorController extends Controller
{
	public function getView()
	{
		if(\Auth::user()->may('access-project-calculator'))
			return view('dashboard.calculator');
		return redirect($this->redirectPath);
	}

	public function calculate()
	{
		$input = \Request::all();
		$project = new Project($input);
		$results = $project->outputFormatted();

		return \Response::json($results,200);
	}

	public function saveProject()
	{
		$input = \Request::all();
		$project = new Project($input);

		if($newProjectId = $project->saveProject())
			return \Response::json(['id'=>$newProjectId],200);
		return \Response::json([],400);
	}

	public function testReport() {
		$input = \Request::all();
		$project = new Project($input);
		$data = $project->outputFormatted();

		$today = Carbon::today();
		$data['today'] = $today->format('d/m/Y');
		$data['id'] = sprintf('%07d', 'test');

		return PDF::loadView('pdfTemplates.internalReport', $data)
		          ->stream('report_'.$data['id'].'_'.$today->format('YmdHis').'.pdf');
	}

	public function testBudget()
	{
		$input = \Request::all();
		$project = new Project($input);
		$data = $project->outputFormatted();

		$today = Carbon::today();
		$data['today'] = $today->format('d/m/Y');
		$data['id'] = sprintf('%07d', 'test');

		return PDF::loadView('pdfTemplates.budget', $data)
		          ->stream('budget_'.$data['id'].'_'.$today->format('YmdHis').'.pdf');
	}

	public function openReport()
	{
		$input = \Request::all();
		$projectId = $input['projectId'];
		$project = ProjectModel::find($projectId)->first();
		$expenses = ExpenseModel::where('project_id',$projectId)->get();
		$tasks = TaskModel::where('project_id',$projectId)->get();
		$wages = WageModel::where('project_id',$projectId)->get();

		$data = $project->toArray();
		$data['expenses'] = [];
		foreach($expenses as $expense)
			array_push($data['expenses'],$expense->toArray());
		$data['tasks'] = [];
		foreach($tasks as $task)
			array_push($data['tasks'],$task->toArray());
		$data['wages'] = [];
		foreach($wages as $wage)
			array_push($data['wages'],$wage->toArray());

		$data['today'] = Carbon::createFromFormat('Y-m-d H:i:s',$data['created_at'])->format('d/m/Y');

		return PDF::loadView('pdfTemplates.internalReport', $data)
		          ->stream(
			          'report_' . $data['id'] . '_' .
			          Carbon::createFromFormat('Y-m-d H:i:s',$data['created_at'])->format('Ymdhis') . '.pdf'
		          );
	}

	public function openBudget()
	{
		$input = \Request::all();
		$projectId = $input['projectId'];
		$project = ProjectModel::find($projectId)->first();
		$expenses = ExpenseModel::where('project_id',$projectId)->get();
		$tasks = TaskModel::where('project_id',$projectId)->get();
		
		$data = $project->toArray();
		$data['expenses'] = [];
		foreach($expenses as $expense)
			array_push($data['expenses'],$expense->toArray());
		$data['tasks'] = [];
		foreach($tasks as $task)
			array_push($data['tasks'],$task->toArray());
		
		$data['today'] = Carbon::createFromFormat('Y-m-d H:i:s',$data['created_at'])->format('d/m/Y');

		return PDF::loadView('pdfTemplates.budget', $data)
		          ->stream(
			          'budget_' . $data['id'] . '_'.
			          Carbon::createFromFormat('Y-m-d H:i:s',$data['created_at'])->format('Ymdhis') . '.pdf'
		          );
	}
}