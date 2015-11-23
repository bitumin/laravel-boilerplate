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
    protected $fillable = [];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

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

    //1:many (inverse)
    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function currency()
    {
        return $this->belongsTo('App\Currency');
    }

    public function project_source()
    {
        return $this->belongsTo('App\ProjectSource');
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
}