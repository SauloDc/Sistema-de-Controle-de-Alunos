<?php

namespace App\Http\Requests\Student;

use App\Rules\Student\StudentGender;
use App\Rules\Student\StudentPhone;
use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
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
            'name' => 'required|min:5|max:256',
            'phone' => ['nullable', new StudentPhone],
            'email' => 'required|email',
            'birthday' => 'required|date',
            'gender' => ['nullable', 'string', new StudentGender]
        ];
    }


    public function messages()
    {
        return [
            'name.required' => 'O Campo Nome deve ser preenchido',
            'phone.required' => 'O Campo telefone deve ser preenchido',
            'email.required' => 'O Campo email deve ser preenchido',
            'email.email' => 'O Campo email deve ser um email valido',
            'birthday.required' => 'O Campo Data de Nascimento deve ser preenchido',
            'birthday.date' => 'O Campo Data de Nascimento deve ser uma data',
            'gender.required' => 'O Campo Genero deve ser preenchido',
        ];
    }
}
