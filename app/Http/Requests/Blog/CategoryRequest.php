<?php

namespace App\Http\Requests\Blog;

use App\Category;
use App\Http\Requests\Request;

class CategoryRequest extends Request
{

    /**
     * @var \App\Category
     */
    protected $category;

    /**
     * @param \App\Category $category
     */
    public function __construct(Category $category)
    {
        $this->category = $category;
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
        $segment = $this->segment(3);
        $id = isset($segment) ? $this->category->byHash($this->segment(3))->id : 0;

        return [
            'name'		=> "required|unique:categories,name,$id|min:3|max:45",
        ];
    }

}
