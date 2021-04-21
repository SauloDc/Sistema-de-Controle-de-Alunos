<?php

namespace App\Http\Requests\Team;

use App\Rules\Team\TeamLevel;
use App\Rules\Team\TeamSeries;
use App\Rules\Team\TeamShift;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'year' => 'required|date',
            'level' => ['required', new TeamLevel],
            'series' => ['required', 'digits:1', new TeamSeries($this->level)],
            'shift' => ['required', new TeamShift],
        ];
    }

    public function messages()
    {
        return [
            'year.required' => 'O Campo Ano deve ser preenchido',
            'year.date' => 'O Campo Ano deve ser do tipo date',
            'level.required' => 'O Campo Nivel de Ensino deve ser preenchido',
            'series.required' => 'O Campo Serie deve ser preenchido',
            'shift.required' => 'O Campo Turno deve ser preenchido',
        ];
    }
}
