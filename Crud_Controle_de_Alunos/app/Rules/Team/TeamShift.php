<?php

namespace App\Rules\Team;

use Illuminate\Contracts\Validation\Rule;

class TeamShift implements Rule
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
        if($value == 'Manhã' || $value == 'Tarde' || $value == 'Noite'){
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
        return 'O campo turno somente deve ser preenchico com Manhã Tarde ou Noite ';
    }
}
