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
            'logo' => 'file|mimes:jpg,png,jpeg',
            'tel1' => 'required|string|max:255',
            'tel2' => 'string|max:255',
            'tel3' => 'string|max:255',
            'tel4' => 'string|max:255',
            'email' => 'email|max:100',
            'instagram' => 'url',
            'whatsapp' => 'url',
            'description' => 'string',
            'banner_image' => 'file|mimes:jpeg,png,jpg',
            'banner_action' => 'string|max:100'
        ];
    }
}
