<?php

namespace App\Lib;

use App\TaskType;

class Task
{
    //input
    var $taskWorkerId           = 0;
    var $taskTypeId         = 0;
    var $taskDescription    = '';
    var $taskHours          = 0;    //h

    //obtained
    var $taskHourlyWage     = 0.00;    //€/h
    var $taskCost           = 0;    //€

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

        return $this->taskCost = $this->taskHours * $this->taskHourlyWage;
    }
}
