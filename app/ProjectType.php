<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectType extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'project_types';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'budget_from','budget_to'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function projectCommissions()
    {
        return $this->hasMany('App\ProjectCommission');
    }
}
