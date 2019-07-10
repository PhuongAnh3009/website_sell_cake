<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
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
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:20',
            'fullname' => 'required',
            're_password' => 'required|same:password'
        ];
    }

    public function messages()
    {
        return [
            'email.email' => 'Check form of email',
            'email.unique' => 'Email used by another',
            'password.required' => 'Type your password',
            're_password.same' => 'Retype your correct password',
            'password.min' => 'Password at lease must be 6 characters',
        ];
    }
}
