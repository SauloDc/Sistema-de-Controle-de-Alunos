<?php

namespace App\Rules\Team;

use Illuminate\Contracts\Validation\Rule;

class TeamLevel implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
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
        if ($value == 'Ensino Médio' || $value == 'Ensino Fundamental') {
            return true;
        } 
        else {
            return false;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'O nivel deve ser Ensino Médio ou Ensino Fundamental.';
    }
}
