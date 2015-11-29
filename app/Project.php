<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'projects';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'client','currency','tasks_cost','expenses_cost',
        'total_cost','commission_rate','commission','total_cost_w_commission',
        'margin_rate','income_tax','gross_utility','income_tax_deduction',
        'net_utility','tax_base','vat','vat_deduction','budget','associates',
        'public_tasks_cost','public_expenses_cost'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    //Relations
    //1:many
    public function tasks()
    {
        return $this->hasMany('App\Task');
    }

    public function expenses()
    {
        return $this->hasMany('App\Expense');
    }

    public function wages()
    {
        return $this->hasMany('App\Wage');
    }
    
    //1:1 (?)
    public function budget()
    {
        return $this->hasOne('App\Budget');
    }

    public function report()
    {
        return $this->hasOne('App\Report');
    }

    //1:many (?)
    public function budgets()
    {
        return $this->hasMany('App\Budget');
    }

    public function reports()
    {
        return $this->hasMany('App\Report');
    }

    //Functions
    public function formattedData()
    {
        return [
            'id'                => sprintf('%07d', $this->id),
            'currency'          => $this->currency,
            'client'            => $this->client,
            'commission_rate'   => number_format($this->commission_rate,2,',','.').' %',
            'commission'        => number_format($this->commission,2,',','.').' '.$this->currency,
            'margin_rate'       => number_format($this->margin_rate,2,',','.').' %',
            'margin'            => number_format($this->margin,2,',','.').' '.$this->currency,
            'tasks_cost'        => number_format($this->tasks_costs,2,',','.').' '.$this->currency,
            'expenses_cost'     => number_format($this->expenses_cost,2,',','.').' '.$this->currency,
            'total_cost'        => number_format($this->total_cost,2,',','.').' '.$this->currency,
            'income_tax'        => number_format($this->income_tax,2,',','.').' %',
            'vat'               => number_format($this->vat,2,',','.').' %',
            'taxes'             => number_format($this->taxes,2,',','.').' '.$this->currency,
            'tax_base'          => number_format($this->tax_base,2,',','.').' '.$this->currency,
            'price'             => number_format($price,2,',','.').' '.$this->currency,
            'associates'        => $this->associates,
            'created_at'        => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $this->created_at)->format('d/m/Y'),
            'updated_at'        => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $this->updated_at)->format('d/m/Y'),
        ];
    }
}