<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tasks';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'worker', 'hours', 'hourly_wage',
        'cost','public_cost','currency','project_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    //1:many(inverse)
    public function projects()
    {
        return $this->belongsTo('App\Project');
    }

    //1:1(inverse)
    public function worker()
    {
        return $this->belongsTo('App\User');
    }

    public function task_type()
    {
        return $this->belongsTo('App\TaskType');
    }

}
