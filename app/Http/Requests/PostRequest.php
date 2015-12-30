<?php

namespace App\Http\Requests;

class PostRequest extends Request
{
    public function __construct()
    {
        //
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
        return [
            'title'             => 'required|min:2|max:100',
            'reviewer'          => 'exists:users,slug',
            'post'              => 'required',
            'category'          => 'required|exists:categories,slug',
            'publishdate'       => 'required|date_format: d-m-Y H:i',
            'password'          => "required_if:visibility,protected",
        ];
    }
}
