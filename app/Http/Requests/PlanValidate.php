<?php

namespace App\Http\Requests;

use App\topic;
use App\User;
use Illuminate\Foundation\Http\FormRequest;

class PlanValidate extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|between:3,30|unique:topics',
            'description' => 'required',
        ];
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
