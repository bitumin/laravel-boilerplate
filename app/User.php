<?php

namespace App;

use App\BlogifyUserTrait;
use Caffeinated\Shinobi\Traits\ShinobiTrait;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Http\Request;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract,
                                    SluggableInterface
{
    use Authenticatable, Authorizable, CanResetPassword, ShinobiTrait, SluggableTrait, BlogifyUserTrait {
        ShinobiTrait::can as may;
        Authorizable::can insteadof ShinobiTrait;
    }

    /**
     * Table columns from where to build the slug and store it.
     *
     * @var array
     */
    protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug',
    ];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password', 'confirmed', 'confirmation_code', 'provider', 'provider_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    /**
     * The roles that belong to the user.
     */
    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }

    public function wages()
    {
        return $this->hasMany('App\Wage');
    }

    public function tasks()
    {
        return $this->hasMany('App\Task');
    }

	//Blog related methods, scopes, etc.

	public function getBloggerRoleName()
	{
		if($this->is('Owner'))
			return 'Owner';
		else if($this->is('Author'))
			return 'Author';
		else if($this->is('Reviewer'))
			return 'Reviewer';
		else if($this->is('Member'))
			return 'Member';

		return false;
	}

	public function scopeBlogger($query)
	{
		$query->whereHas('roles', function($query) {
			$query->where(function($query){
				$query->where('role_id', Role::findBySlug('Owner')->id)
				    ->orWhere('role_id', Role::findBySlug('Author')->id)
				    ->orWhere('role_id', Role::findBySlug('Reviewer')->id)
				    ->orWhere('role_id', Role::findBySlug('Member')->id);
			});
		});
	}

	public function reviewers()
	{
		return User::whereHas('roles', function($query) {
			$query->where('role_id', Role::findBySlug('Reviewer')->id);
		});
	}

}
