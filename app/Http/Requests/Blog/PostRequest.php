<?php

namespace App\Http\Requests\Blog;

use App\Http\Requests\Request;
use App\Post;
use App\Visibility;

class PostRequest extends Request
{

    /**
     * @var \App\Post
     */
    protected $post;

    /**
     * @var \App\Visibility
     */
    protected $visibility;

    /**
     * @param \App\Post $post
     * @param \App\Visibility $visibility
     */
    public function __construct(Post $post, Visibility $visibility)
    {
        $this->post = $post;
        $this->visibility = $visibility;
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $hash = $this->input('hash');
        $id = (! empty($hash)) ? $this->post->byHash($hash)->id : 0;
        $protected_visibility = $this->visibility->whereName('Protected')->first()->hash;

        return [
            'title'             => 'required|min:2|max:100',
            'slug'              => "required|unique:posts,slug,$id|min:2|max:120",
            'reviewer'          => 'exists:users,hash',
            'post'              => 'required',
            'category'          => 'required|exists:categories,hash',
            'publishdate'       => 'required|date_format: d-m-Y H:i',
            'password'          => "required_if:visibility,$protected_visibility",
        ];
    }

}
