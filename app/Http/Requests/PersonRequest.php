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

    public function messages()
    {
        return [
            'title.required' => 'tytuł jest wymagany',
            'title.min' => 'tytuł min 2 znaki',
            'title.max' => 'tytuł max 50 znaków',
            'name.required' => 'imię jest wymagane',
            'name.min' => 'imię min 2 znaki',
            'name.max' => 'imię max 30 znaków',
            'surname.required' => 'nazwisko jest wymagane',
            'surname.min' => 'nazwisko min 2 znaki',
            'surname.max' => 'nazwisko max 30 znaków',
            'section.required' => 'sekcja jest wymagana',
            'section.min' => 'sekcja min 3 znaki',
            'section.max' => 'sekcja max 50 znaków',
            'position.required' => 'pozycja jest wymagana',
            'position.min' => 'pozycja min 3 znaki',
            'position.max' => 'pozycja max 50 znaków',
            'gender.required' => 'płeć jest wymagana',
            'gender.min' => 'płeć min 5 znaków',
            'gender.max' => 'płeć max 30 znaków',
            'birth_date.required' => 'data urodzenia jest wymagana',
            'email.required' => 'email jest wymagany',
            'email.min' => 'email min 5 znaki',
            'email.max' => 'email max 150 znaków',
            'url.max' => 'url max 150 znaków'
        ];
    }
}
