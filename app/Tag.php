<?php

namespace App;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;
use Validator;

class Tag extends BaseModel implements SluggableInterface
{
    use SoftDeletes, SluggableTrait;

	protected $sluggable = [
		'build_from' => 'name',
		'save_to'    => 'slug',
	];

    /**
     * The database table used by the model
     *
     * @var string
     */
    protected $table = 'tags';

    /**
     * The attributes that are mass assignable
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * Set or unset the timestamps for the model
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * @param $tags
     * @return \Illuminate\Validation\Validator
     */
    public function validate($tags)
    {
        $rules = [];
        $messages = [
            'required'  => trans('posts.validation.required'),
            'min'       => trans('posts.validation.min'),
            'max'       => trans('posts.validation.max'),
        ];

        foreach ($tags as $key => $tag) {
            $rules[$key] = 'required|min:2|max:45';
        }

        return Validator::make($tags, $rules, $messages);
    }

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    |
    | For more information pleas check out the official Laravel docs at
    | http://laravel.com/docs/5.0/eloquent#relationships
    |
    */

    public function post()
    {
        return $this->belongsToMany('App\Post', 'post_tag', 'tag_id', 'post_id');
    }

}
