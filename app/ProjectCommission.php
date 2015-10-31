<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectCommission extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'project_commissions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['commission'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public function projectSource()
    {
        return $this->belongsTo('App\ProjectSource');
    }

    public function projectType()
    {
        return $this->belongsTo('App\ProjectType');
    }
}
