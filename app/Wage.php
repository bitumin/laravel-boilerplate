<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wage extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'wages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'worker','is_associate','wage','currency','project_id'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    //1:many(inverse)
    public function project()
    {
        return $this->belongsTo('App\Project');
    }

    public function worker()
    {
        return $this->belongsTo('App\User');
    }

}
