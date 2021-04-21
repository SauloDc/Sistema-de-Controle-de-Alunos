<?php

namespace App\Rules\Student;

use Illuminate\Contracts\Validation\Rule;

class StudentPhone implements Rule
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
        if (!(preg_match('/^(\(\d{2}\))?\d{4,5}-\d{4}$/', $value) > 0)) {
            return false;
        }
        else{
            return true;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'o Telefone deve ter o formato (99)99999-9999 ou (99)9999-9999 ou 99999-9999 ou 9999-9999';
    }
}
