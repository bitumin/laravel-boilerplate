<?php

namespace App;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Role extends \Caffeinated\Shinobi\Models\Role implements SluggableInterface
{
    use SluggableTrait;

	/**
	 * The database table used by the model
	 *
	 * @var string
	 */
	protected $table = 'roles';

    /**
     * Table columns from where automatically build the slug and store it.
     *
     * @var array
     */
    protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug',
    ];

	/**
	 * Set or unset the timestamps for the model
	 *
	 * @var bool
	 */
	public $timestamps = true;

	/*
	|--------------------------------------------------------------------------
	| Scopes
	|--------------------------------------------------------------------------
	|
	| For more information pleas check out the official Laravel docs at
	| http://laravel.com/docs/5.0/eloquent#queryscopes
	|
	*/

	public function scopeByAdminRoles($query)
	{
		$query->whereName('Owner')
		      ->orWhere('name', 'Author')
		      ->orWhere('name', 'Reviewer');
	}
}