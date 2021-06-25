<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScientificRequest extends FormRequest
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
            'data'=> 'required|string|min:4',
        ];
    }

    public function messages()
    {
        return [
            'data.min' => 'Zbyt mało danych',
            'data.required' => 'Pole Dane jest wymagane',
        ];
    }
}
