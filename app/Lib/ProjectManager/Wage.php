<?php

namespace App\Lib\ProjectManager;

use App\TaskType;
use App\User;

class Wage
{
    //input
    var $workerId               = 0;
    var $workerName             = '';
    var $workerIsAssociate      = false;
    var $wage                   = 0.00; //€
    var $currency               = '€';

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
            if($key === 'workerId') {
                if($this->workerId) {
                    $worker = User::where('id',$this->workerId)->first();
                    $this->workerName = $worker->name;
                    $this->workerIsAssociate = ($worker->is('founder') || $worker->is('shareholder'));
                }
            }
        }
    }

    public function workerIsAnAssociate()
    {
        return $this->workerIsAssociate;
    }

    public function outputFormatted()
    {
        return [
            'worker'            => $this->workerName,
            'is_associate'      => $this->workerIsAssociate,
            'wage'              => number_format((float) $this->wage,2,',','.').' '.$this->currency,
            'currency'          => $this->currency,
        ];
    }
}