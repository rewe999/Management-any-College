<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonRequest extends FormRequest
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
            'title' => 'required|string|min:2|max:50',
            'name' => 'required|string|min:2|max:30',
            'surname' => 'required|string|min:2|max:30',
            'section' => 'required|string|min:3|max:50',
            'avatar' => "image:jpeg,png,jpg,svg|max:4096",
            'position' => 'required|string|min:3|max:50',
            'gender' => 'required|string|min:5|max:30',
            'birth_date' => 'required|string',
            'email' => 'required|email|min:5|max:150',
            'url' => 'max:50'
        ];
    }
}
