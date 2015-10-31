<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectSource extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'project_sources';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

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
