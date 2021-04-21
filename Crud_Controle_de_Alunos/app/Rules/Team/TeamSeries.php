<?php

namespace App\Rules\Team;

use Illuminate\Contracts\Validation\Rule;

class TeamSeries implements Rule
{

    protected $level;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($level)
    {
        $this->level = $level;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if ($this->level === 'Ensino Médio' && ($value >= 1 && $value <= 3)){
            return true;
        }
        else if($this->level === 'Ensino Fundamental' && ($value >= 1 && $value <= 9)){
            return true;
        }
        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Para o Ensino Médio os valores podem ser 1, 2 ou 3, Já para Ensino Fundamental os valores são 1 - 9 .';
    }
}
