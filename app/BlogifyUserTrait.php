<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Auth;

Trait BlogifyUserTrait
{
    use SoftDeletes;

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    |
    | For more information pleas check out the official Laravel docs at
    | http://laravel.com/docs/5.0/eloquent#relationships
    |
    */

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function history()
    {
        return $this->hasMany('App\History');
    }

    public function post()
    {
        return $this->hasMany('App\Post');
    }

    public function comment()
    {
        return $this->hasMany('App\Comment');
    }

    /*
    |--------------------------------------------------------------------------
    | Scopes
    |--------------------------------------------------------------------------
    |
    | For more information pleas check out the official Laravel docs at
    | http://laravel.com/docs/5.0/eloquent#query-scopes
    |
    */

    public function scopeNewUsersSince($query, $date)
    {
        return $query->where('created_at', '>=', $date)->get();
    }

    public function scopeByRole($query, $role_id)
    {
        return $query->whereRoleId($role_id);
    }

    public function scopeReviewers($query)
    {
        $reviewer_role_id = Role::whereName('Reviewer')->first()->id;
        $owner_role_id = Role::whereName('Owner')->first()->id;

        return $query->where(function($q) use ($reviewer_role_id, $owner_role_id) {
            $q->whereRoleId($reviewer_role_id)
                ->orWhere('role_id', '=', $owner_role_id);
        })->where('id', '<>', Auth::user()->id)->get();
    }

    /*
    |--------------------------------------------------------------------------
    | Accessors
    |--------------------------------------------------------------------------
    |
    | For more information pleas check out the official Laravel docs at
    | http://laravel.com/docs/master/eloquent#accessors-and-mutators
    |
    */

    public function getFullNameAttribute()
    {
        return $this->attributes['firstname'].' '.$this->attributes['lastname'];
    }
}

