<?php

namespace App\Http\Requests;

use App\Rules\PasswordMatching;
use Illuminate\Foundation\Http\FormRequest;

class PasswordValidate extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'old_pass' => new PasswordMatching,
            'new_pass' => 'required|min:8',
        ];
    }
    public function attributes()
    {
        return [
          'new_pass' => 'new password',
        ];
    }

    public function withValidator($validator) {
        $validator->after(function ($validator) {
            if(request('new_pass')!=request('confirm_new_pass'))
                $validator->errors()->add('confirm_new_pass', 'confirm must be correct.');
        });
    }


    // to edit name attr. when return to message, to see how ? open comment bellow.
    /*
    public function attributes()
    {
        return [
            'name' => 'name address',
        ];
    }
    */
    //override the error's message's if you want ... , to see how ? open comment bellow/
    /*
    public function messages()
    {
        return [
            'name.required' => 'Name must have a value, empty it\' not a solution',
            'unique' => 'This name it\s already in data base.',
            'name.max' => 'over 15, your name will be invalid',
        ];
    }
    */
    // you can hook any validate after rules validation, to see how ? open comment bellow.
    /*
    public function withValidator($validator) {
        $validator->after(function ($validator) {
            if(true)
                $validator->errors()->add('name', 'this is bla bla bla error.');
        });
    }
    */
}
