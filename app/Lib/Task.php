<?php

namespace App\Lib;

use App\TaskType;

class Task
{
    //input
    var $taskWorkerId       = 0;
    var $taskTypeId         = 0;
    var $taskDescription    = '';
    var $taskHours          = 0;        //h
    var $currencyUnit       = '€';

    //calculated
    var $taskHourlyWage     = 0.00;     //€/h
    var $taskCost           = 0.00;     //€

    //output
    var $taskCostOutput     = '';

    public function __construct()
    {
        //
    }

    public function set($params = [])
    {
        foreach($params as $key => $val)
            if(isset($this->$key))
                $this->$key = $val;
    }

    public function cost()
    {
        $this->taskHourlyWage = floatval(
            TaskType::where('id',$this->taskTypeId)->pluck('hourly_wage')
        );

        $this->taskCost = $this->taskHours * $this->taskHourlyWage;
        $this->taskCostOutput = number_format($this->taskCost,2,',','.').' '.$this->currencyUnit;

        return $this->taskCost;
    }
}
