<?php

namespace App;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Auth;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends BaseModel implements SluggableInterface
{
    use SoftDeletes, SluggableTrait;

    /**
     * The database table used by the model
     *
     * @var string
     */
    protected $table = 'posts';

	/**
	 * Table columns from where automatically build the slug and store it.
	 *
	 * @var array
	 */
	protected $sluggable = [
		'build_from' => 'title',
		'save_to'    => 'slug',
	];

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

    /*
    |--------------------------------------------------------------------------
    | Relationships
    |--------------------------------------------------------------------------
    |
    | For more information pleas check out the official Laravel docs at
    | http://laravel.com/docs/5.0/eloquent#relationships
    |
    */

    public function user()
    {
        return $this->belongsTo('App\User')->withTrashed();
    }

    public function comment()
    {
        return $this->hasMany('App\Comment');
    }

    public function category()
    {
        return $this->belongsTo('App\Category')->withTrashed();
    }

    public function media()
    {
        return $this->hasMany('App\Media');
    }

    public function tag()
    {
        return $this->belongsToMany('App\Tag', 'post_tag', 'post_id', 'tag_id')->withTrashed();
    }

    public function status()
    {
        return $this->belongsTo('App\Status');
    }

    public function visibility()
    {
        return $this->belongsTo('App\Visibility');
    }

    /*
    |--------------------------------------------------------------------------
    | Accessors & Mutators
    |--------------------------------------------------------------------------
    |
    | For more information pleas check out the official Laravel docs at
    | http://laravel.com/docs/5.0/eloquent#accessors-and-mutators
    |
    */

    public function setPublishDateAttribute($value)
    {
        $this->attributes['publish_date'] = date("Y-m-d H:i:s", strtotime($value));
    }

    public function getPublishDateAttribute($value)
    {
        return date("d-m-Y H:i", strtotime($value));
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

    public function scopeForOwner($query)
    {
        return $query;
    }

    public function scopeForReviewer($query)
    {
        return $query->whereReviewerId(Auth::user()->id);
    }

    public function scopeForAuthor($query)
    {
        return $query->whereUserId(Auth::user()->id);
    }

    public function scopeBySlug($query, $slug)
    {
        return $query->whereSlug($slug)->first();
    }

    public function scopeForPublic($query)
    {
        return $query->where('publish_date', '<=', date('Y-m-d H:i:s'))
            ->where('visibility_id', '1');
    }
}
