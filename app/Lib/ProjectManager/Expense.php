<?php

namespace App\Lib\ProjectManager;

class Expense
{
    //input
    var $expenseName            = '';
    var $expenseDescription     = '';
    var $expensePrice           = 0.00; //€
    var $expensePublicPrice     = 0.00; //€
    var $expenseUnits           = 0;
    var $expenseMarginRate      = 0;    //%
    var $expenseMargin          = 0.00; //€
    var $expenseCost            = 0.00; //€
    var $expensePublicCost      = 0.00; //€
    var $expenseCurrency        = '€';

    public function __construct($params = [])
    {
        if(count($params) > 0)
            $this->set($params);
    }

    public function set($params = [])
    {
        foreach ($params as $key => $value)
            if(isset($this->$key))
                $this->$key = $value;
    }

    public function cost()
    {
        $this->expenseMargin = floatval($this->expensePrice * ($this->expenseMarginRate/100));
        $this->expensePublicPrice = floatval($this->expensePrice + $this->expenseMargin);
        $this->expenseCost = floatval(($this->expensePrice + $this->expenseMargin)*$this->expenseUnits);

        return $this->expenseCost;
    }

    public function calculatePublicPrice()
    {
        $this->expensePublicPrice = $this->expensePublicCost / $this->expenseUnits;
    }

    public function outputFormatted()
    {
        return [
            'name'              => $this->expenseName,
            'description'       => $this->expenseDescription,
            'price'             => number_format((float) $this->expensePrice,2,',','.').' '.$this->expenseCurrency,
            'public_price'      => number_format((float) $this->expensePublicPrice,2,',','.').' '.$this->expenseCurrency,
            'units'             => $this->expenseUnits,
            'margin_rate'       => number_format((float) $this->expenseMarginRate,2,',','.').' %',
            'margin'            => number_format((float) $this->expenseMargin,2,',','.').' '.$this->expenseCurrency,
            'cost'              => number_format((float) $this->expenseCost,2,',','.').' '.$this->expenseCurrency,
            'public_cost'       => number_format((float) $this->expensePublicCost,2,',','.').' '.$this->expenseCurrency,
            'currency'          => $this->expenseCurrency,
        ];
    }
}
