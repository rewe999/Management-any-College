<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name'=> 'required|string|min:3|max:50',
            'email'=>'required|string|email|min:5|max:50',
            'message'=>'required|string|min:15|max:500',
        ];
    }

    public function messages()
    {
        return [
            'name.min' => 'Imię wymaga min 3 znaki',
            'name.required' => 'Podaj Imię',
            'message.min' => 'opis wymaga min 15 znaków',
            'message.required' => 'Opis jest wymagany',
            'email.required' => 'Email jest wymagany',
            'email.min' => 'email wymaga min 5 znaków',
        ];
    }
}
