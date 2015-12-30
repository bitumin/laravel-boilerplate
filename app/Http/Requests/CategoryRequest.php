<?php

namespace App\Http\Requests;

use App\Category;

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
        $segment = $this->segment(4);
        $id = isset($segment) ? $this->category->findBySlugOrFail($this->segment(4))->id : 0;

	    //the third parameter for unique(database) rule is the id to be excluded from the uniqueness check
        return [
            'name'		=> "required|unique:categories,name,$id|min:3|max:45",
        ];
    }

}
