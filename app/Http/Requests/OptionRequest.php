<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OptionRequest extends FormRequest
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
            'name' => 'required|max:255',
            'logo' => 'mimes:jpg,png,jpeg',
            'tel1' => 'required|string|max:255',
            'tel2' => 'max:255',
            'tel3' => 'max:255',
            'tel4' => 'max:255',
            'email' => 'max:100',
            'instagram' => 'max:255',
            'whatsapp' => 'max:255',
            'description' => 'string',
            'keys' => 'string|max:255',
            'banner_image' => 'mimes:jpeg,png,jpg',
            'banner_action' => 'max:100'
        ];
    }
}
