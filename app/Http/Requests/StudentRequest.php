<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StudentRequest extends FormRequest
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
            'name' => [
                'required',
                'max:255',
                Rule::unique('students')->ignore($this->student),
            ],
            'email' => [
                'required',
                'email',
                Rule::unique('students')->ignore($this->student),
            ],
            'cpf' => [
                'required',
                Rule::unique('students')->ignore($this->student),
                'cpf'
            ],
            'matricula' => [
                'required',
                'integer',
                Rule::unique('students')->ignore($this->student),
            ],
            'ativo' => [
                'boolean'
            ]
        ];
    }
}
