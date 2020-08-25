<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PasswordMatching implements Rule
{

    public function __construct()
    {
    }

    public function passes($attribute, $value)
    {
        return (Auth::attempt(['email'=>Auth::user()->email, 'password'=>$value]));
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'incorrect password! please enter the correct.';
    }
}
