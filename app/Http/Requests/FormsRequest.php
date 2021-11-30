<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormsRequest extends FormRequest
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
            'title'=> 'required|string|min:4|max:120',
            'description'=>'required|string|min:5|max:1000',
        ];
    }

    public function messages()
    {
        return [
            'title.min' => 'Zbyt krótki tytuł',
            'title.required' => 'Tytuł jest wymagany',
            'description.min' => 'Zbyt krótki opis',
            'description.max' => 'Zbyt krótki długi',
            'description.required' => 'Opis jest wymagany',
        ];
    }
}
