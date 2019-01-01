<?php

namespace App\Http\Requests;

class RegisterRequest extends Request
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
            'user_name' => 'required|between:5,255|unique:users',
            'password' => 'required|between:6,255',
            'password_confirm' => 'same:password',
            'email' => 'required|email|unique:users'
        ];
    }

    public function messages()
    {
        return [
            'password_confirm.same' => 'Mật khẩu không khớp !'
        ];
    }
}
