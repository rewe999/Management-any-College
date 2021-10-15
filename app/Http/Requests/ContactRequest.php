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
            'name'=> 'required|string|min:5',
            'email'=>'required|string|email|min:10',
            'message'=>'required|string|min:15',
        ];
    }

    public function messages()
    {
        return [
            'name.min' => 'Imię wymaga min 5 znaków',
            'name.required' => 'Podaj Imię',
            'message.min' => 'opis wymaga min 15 znaków',
            'message.required' => 'Opis jest wymagany',
            'email.required' => 'Email jest wymagany',
            'email.min' => 'email wymaga min 10 znaków',
        ];
    }
}
