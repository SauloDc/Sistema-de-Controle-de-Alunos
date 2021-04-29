<?php

namespace App\Http\Requests\School;

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
            'address' => 'required|min:5|max:256',
        ];
    }
    
    public function messages()
    {
        return [
            'name.required' => 'O Campo Nome deve ser preenchido',
            'address.required' => 'O Campo Endereço deve ser preenchido',
        ];
    }
}
