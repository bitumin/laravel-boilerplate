<?php

namespace App\Lib\ProjectManager;

use App\TaskType;
use App\User;

class Task
{
    //input
    var $taskWorkerId           = 0;
    var $taskWorkerName         = '';
    var $taskTypeId             = 0;
    var $taskName               = '';
    var $taskDescription        = '';
    var $taskHours              = 0;    //h
    var $taskHourlyWage         = 0.00; //€/h
    var $taskPublicHourlyWage   = 0.00; //€/h
    var $taskCost               = 0.00; //€
    var $taskPublicCost         = 0.00; //€
    var $taskCurrency           = '€';

    public function __construct($params = [])
    {
        if(count($params) > 0)
            $this->set($params);
    }

    public function set($params = [])
    {
        foreach($params as $key => $val) {
            if(isset($this->$key))
                $this->$key = $val;
            if($key === 'taskWorkerId')
                if($this->taskWorkerId)
                    $this->taskWorkerName = User::where('id',$this->taskWorkerId)->pluck('name');
            if($key === 'taskTypeId') {
                if($this->taskTypeId) {
                    $this->taskName = TaskType::where('id',$this->taskTypeId)->pluck('name');
                    $this->taskHourlyWage = floatval(TaskType::where('id',$this->taskTypeId)->pluck('hourly_wage'));
                }
            }
        }
    }

    public function cost()
    {
        $this->taskCost = $this->taskHours * $this->taskHourlyWage;

        return $this->taskCost;
    }

    public function calculatePublicPrice()
    {
	    if($this->taskHours > 0)
            $this->taskPublicHourlyWage = $this->taskPublicCost / $this->taskHours;
    }

    public function outputFormatted()
    {
        return [
            'name'                  => $this->taskName,
            'description'           => $this->taskDescription,
            'worker'                => $this->taskWorkerName,
            'hours'                 => $this->taskHours,
            'hourly_wage'           => number_format((float) $this->taskHourlyWage,2,',','.').' '.$this->taskCurrency,
            'public_hourly_wage'    => number_format((float) $this->taskPublicHourlyWage,2,',','.').' '.$this->taskCurrency,
            'cost'                  => number_format((float) $this->taskCost,2,',','.').' '.$this->taskCurrency,
            'public_cost'           => number_format((float) $this->taskPublicCost,2,',','.').' '.$this->taskCurrency,
            'currency'              => $this->taskCurrency,
        ];
    }
}
