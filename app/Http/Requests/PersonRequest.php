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
            'title' => 'required|string|min:2',
            'name' => 'required|string|min:2',
            'surname' => 'required|string|min:2',
            'section' => 'required|string|min:3',
            'avatar' => "image:jpeg,png,jpg,svg|max:4096",
            'position' => 'required|string|min:3',
            'gender' => 'required|string|min:5',
            'birth_date' => 'required|string',
            'email' => 'required|string|min:5',
            'url' => 'required|string|min:6'
        ];
    }
}
