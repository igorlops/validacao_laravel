<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CursoPHP implements Rule
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
        return $value !== "PHP";
        // if($value === 'PHP')
        // {
        //     return false;
        // }
        // return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'O campo curso diz: PHP é inválido';
    }
}
