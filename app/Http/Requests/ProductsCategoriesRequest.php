<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsCategoriesRequest extends FormRequest
{
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
            'parent' => 'required',
            'title' => 'required|string|min:2|max:25',
            'description' => 'required|string|min:2|max:25',
            'image' => 'required|mimes:jpg,jpeg,png|max:2048',
        ];
    }
}
