<?php

namespace App\Lib\ProjectManager;

use App\ClientType;
use App\ProjectCommission;
use App\User;
use App\Lib\ProjectManager\Task as Task;
use App\Lib\ProjectManager\Expense as Expense;
use App\Lib\ProjectManager\Wage as Wage;
use App\Task as TaskModel;
use App\Wage as WageModel;
use App\Expense as ExpenseModel;

class Project
{
    var $currency                   = '€';
    var $client                     = '';

    var $tasks                      = [];
    var $tasks_cost                 = 0.00; //€
    var $expenses                   = [];
    var $expenses_cost              = 0.00; //€
    var $total_cost                 = 0.00; //€
    var $commission_rate            = 0.00; //%
    var $commission                 = 0.00; //€
    var $total_cost_w_commission    = 0.00; //€
    
    var $margin_rate                = 0.00; //%
    var $income_tax                 = 0.00; //% IRPF
    var $gross_utility              = 0.00; //€
    var $income_tax_deduction       = 0.00; //€ IRPF
    var $net_utility                = 0.00; //€
    var $tax_base                   = 0.00; //€
    
    var $vat                        = 0.00; //% IVA
    var $vat_deduction              = 0.00; //€ IVA
    var $budget                     = 0.00; //€
    
    var $associates                 = 0;

    var $public_tasks_cost           = 0.00; //€
    var $public_expenses_cost        = 0.00; //€
    
    var $wages                      = [];

    public function __construct($input)
    {
        $this->currency = $input['projectCurrency'];
        $this->client = $input['clientName'];

        //Gather the tasks and expenses data
        foreach($input as $key => $value) {
            $explodedKey = explode('-', $key);

            //filter the row models with empty data (empty row models)
            if(empty($explodedKey[1])) 
                continue;

            //gather the tasks data
            if($explodedKey[0] === 'taskWorkerId')
                $newTask = new Task(['taskCurrency' => $this->currency]);
            if(isset($newTask))
                $newTask->set([$explodedKey[0] => $value]);
            if($explodedKey[0] === 'taskHours')
                array_push($this->tasks, $newTask);

            //gather the expenses data
            if($explodedKey[0] === 'expenseName')
                $newExpense = new Expense(['expenseCurrency' => $this->currency]);
            if(isset($newExpense))
                $newExpense->set([$explodedKey[0] => $value]);
            if($explodedKey[0] === 'expenseMarginRate')
                array_push($this->expenses, $newExpense);
        }

        //Calculate (by aggregation) total tasks and expenses cost
        foreach($this->tasks as $task)
            $this->tasks_cost += $task->cost();
        foreach($this->expenses as $expense)
            $this->expenses_cost += $expense->cost();

        //Calculate total cost
        $this->total_cost = $this->expenses_cost + $this->tasks_cost;

        //Calculate each workers wage
        foreach($this->tasks as $task) {
            if(!isset($this->wages[$task->taskWorkerId]))
                $this->wages[$task->taskWorkerId] = new Wage([
                    'workerId' => $task->taskWorkerId,
                    'currency' => $this->currency
                ]);
            $this->wages[$task->taskWorkerId]->wage += $task->taskCost;
        }

        //Commission rate
        $this->commission_rate = floatval(
            ProjectCommission::where('project_source_id', $input['projectSourceId'])
                ->where('project_type_id', $input['projectTypeId'])
                ->pluck('commission')
        );

        //Commission
        $this->commission = $this->total_cost * ($this->commission_rate/100);

        //Add commission to project costs
        $this->total_cost_w_commission = $this->total_cost + $this->commission;
        
        //Income tax (es: IRPF, régimen general)
        $this->income_tax = $input['income_tax'];

        //Margin rate
        $this->margin_rate = floatval(ClientType::where('id',$input['clientTypeId'])->pluck('profit_margin'));

        //Tax base (price before VAT) (es: base imponible)
        $this->tax_base = $this->total_cost_w_commission / (1-($this->margin_rate/(100-$this->income_tax)));

        //Gross utility (the one taxed by the income tax)
        $this->gross_utility = $this->tax_base - $this->total_cost_w_commission;

        //Income tax deduction
        $this->income_tax_deduction = $this->gross_utility * ($this->income_tax/100);

        //Net utility (added value after the income tax deduction)
        $this->net_utility = $this->gross_utility - $this->income_tax_deduction;

        //VAT (es: IVA)
        $this->vat = $input['vat'];
        
        //VAT deduction
        $this->vat_deduction = $this->tax_base * ($this->vat/100);

        //Project budget
        $this->budget = $this->tax_base + $this->vat_deduction;

        //Check the number of associates (shareholders/founders) participating in the project
        foreach($this->wages as $wage) {
            if($wage->workerIsAnAssociate())
                ++$this->associates;
        }

        //Re-calculate shareholders wage
        if(count($this->associates) > 0) {
            foreach($this->wages as $wage) {
                if($wage->workerIsAnAssociate())
                    $wage->wage += ($this->net_utility / $this->associates);
            }
        }

        //Prepare data for budget/public disclosure (hide income taxes, commissions, utility, etc. related surcharges)
        $items = count($this->tasks) + count($this->expenses);
        $surcharge = ($items > 0) ? ($this->tax_base - $this->total_cost_w_commission)/$items : 0.00;
        foreach($this->tasks as $task) {
            $task->taskPublicCost = $task->taskCost + $surcharge;
            $this->public_tasks_cost += $task->taskPublicCost;
            $task->calculatePublicPrice();
        }
        foreach($this->expenses as $expense) {
            $expense->expensePublicCost = $expense->expenseCost + $surcharge;
            $this->public_expenses_cost += $expense->expensePublicCost;
            $expense->calculatePublicPrice();
        }
    }
    
    public function outputFormatted()
    {
        $tasksOutput = [];
        $expensesOutput = [];
        $wagesOutput = [];

        foreach($this->tasks as $task)
            array_push($tasksOutput,$task->outputFormatted());
        foreach($this->expenses as $expense)
            array_push($expensesOutput,$expense->outputFormatted());
        foreach($this->wages as $wage)
            array_push($wagesOutput,$wage->outputFormatted());

        return [
            'client'                    => $this->client,
            'currency'                  => $this->currency,
            
            'tasks'                     => $tasksOutput,
            'expenses'                  => $expensesOutput,
            'wages'                     => $wagesOutput,
            
            'tasks_cost'                => number_format((float) $this->tasks_cost,2,',','.').' '.$this->currency,
            'expenses_cost'             => number_format((float) $this->expenses_cost,2,',','.').' '.$this->currency,
            'total_cost'                => number_format((float) $this->total_cost,2,',','.').' '.$this->currency,
            'commission_rate'           => number_format((float) $this->commission_rate,2,',','.').' %',
            'commission'                => number_format((float) $this->commission,2,',','.').' '.$this->currency,
            'total_cost_w_commission'   => number_format((float) $this->total_cost_w_commission,2,',','.').' '.$this->currency,
            
            'margin_rate'               => number_format((float) $this->margin_rate,2,',','.').' %',
            'income_tax'                => number_format((float) $this->income_tax,2,',','.').' %',
            'gross_utility'             => number_format((float) $this->gross_utility,2,',','.').' '.$this->currency,
            'income_tax_deduction'      => number_format((float) $this->income_tax_deduction,2,',','.').' '.$this->currency,
            'net_utility'               => number_format((float) $this->net_utility,2,',','.').' '.$this->currency,
            'tax_base'                  => number_format((float) $this->tax_base,2,',','.').' '.$this->currency,

            'vat'                       => number_format((float) $this->vat,2,',','.').' %',
            'vat_deduction'             => number_format((float) $this->vat_deduction,2,',','.').' '.$this->currency,
            'budget'                    => number_format((float) $this->budget,2,',','.').' '.$this->currency,

            'associates'                => $this->associates,

            'public_tasks_cost'         => number_format((float) $this->public_tasks_cost,2,',','.').' '.$this->currency,
            'public_expenses_cost'      => number_format((float) $this->public_expenses_cost,2,',','.').' '.$this->currency,
        ];
    }

    public function saveProject()
    {
        $results = $this->outputFormatted();

        $newProject = \App\Project::create($results);
        if(empty($newProject->id))
            return false;

        foreach($results['tasks'] as $taskResults)
        {
            $taskResults['project_id'] = $newProject->id;
            TaskModel::create($taskResults);
        }
        foreach($results['expenses'] as $expenseResults)
        {
            $expenseResults['project_id'] = $newProject->id;
            ExpenseModel::create($expenseResults);
        }
        foreach($results['wages'] as $wageResults)
        {
            $wageResults['project_id'] = $newProject->id;
            WageModel::create($wageResults);
        }

        return $newProject->id;
    }
}
