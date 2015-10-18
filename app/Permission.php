<?php

namespace App;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Permission extends \Caffeinated\Shinobi\Models\Permission implements SluggableInterface
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