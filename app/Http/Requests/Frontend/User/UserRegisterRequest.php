<?php

namespace App\Http\Requests\Frontend\User;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
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
            "username"=>"required|max:256",
            "email"=>"required|unique:users,email|email",
            "phonenumber"=>"required|numeric|min:10",
            "password"=>"required"
        ];
    }

    public function messages()
    {
        return [
            'username.reuired' => 'Please Enter The User Name',
            'email.required' => 'Please Enter The Email',
            'email.unique' => 'Email Id Already Exist',
        ];
    }
}
