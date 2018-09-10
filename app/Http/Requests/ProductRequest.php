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
            'name' => 'required|max:25',
            'description' => 'max:80',
            'price' => 'required|integer|max:99999|min:0',
            'image' => 'required_if:edit,1|file|mimes:jpeg,png,jpg',
            'type_id' => 'required',
        ];
    }
}
