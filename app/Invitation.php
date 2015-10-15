<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'invitations';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['expired', 'email', 'role_id', 'keyword'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['keyword'];

    public function role()
    {
        return $this->belongsTo('\Caffeinated\Shinobi\Models\Role')->withTimestamps();
    }
}
