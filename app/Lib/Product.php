<?php

namespace App\Lib;

use App\TaskType;

class Product
{
    //input
    var $productDescription     = '';
    var $productPrice           = 0.00;     //€
    var $productUnits           = 1;
    var $productPriceMargin     = 0;        //%

    //calculated
    var $productCost            = 0.00;     //€
    var $productCostOutput      = '';
    var $currencyUnit           = '€';

    public function __construct()
    {
        //
    }

    public function set($params = [])
    {
        foreach ($params as $key => $value)
            if(isset($this->$key))
                $this->$key = $value;
    }

    public function cost()
    {
        $extraCost = $this->productPrice * ($this->productPriceMargin/100);
        $this->productCost = floatval(($this->productPrice + $extraCost)*$this->productUnits);
        $this->productCostOutput = number_format($this->productCost,2,',','.').' '.$this->currencyUnit;

        return $this->productCost;
    }
}
