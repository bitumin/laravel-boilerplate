<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientType extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'client_types';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description', 'profit_margin'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

}
