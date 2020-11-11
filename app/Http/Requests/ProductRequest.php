<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'product_name' => 'required|string|min:2|max:25',
            'product_price' => 'required|string',
            'product_description' => 'required|string',
            'product_color' => 'required|string',
            'product_code' => 'required|string',
            'brand'=>'required',
            'image' => 'required|mimes:jpg,jpeg,png|max:2048',
        ];
    }
}
