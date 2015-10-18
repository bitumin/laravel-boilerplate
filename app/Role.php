<?php

namespace App;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Role extends \Caffeinated\Shinobi\Models\Role implements SluggableInterface
{
    use SluggableTrait;

    /**
     * Table columns from where automatically build the slug and store it.
     *
     * @var array
     */
    protected $sluggable = [
        'build_from' => 'name',
        'save_to'    => 'slug',
    ];
}