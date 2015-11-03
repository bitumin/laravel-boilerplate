<?php

namespace App\Lib;

use App\TaskType;

class Product
{
    //input
    var $productDescription     = '';
    var $productPrice           = 0;    //€
    var $productPriceMargin     = 0;    //%

    //calculated
    var $productCost            = 0;    //€

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
        return $this->productCost = floatval($this->productPrice) * ($this->productPriceMargin/100);
    }
}
