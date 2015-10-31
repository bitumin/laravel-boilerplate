<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskType extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'task_types';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'hourly_wage'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

}
