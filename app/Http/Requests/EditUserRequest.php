<?php

namespace App\Http\Requests;


use App\Models\User;

class EditUserRequest extends Request
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
        $inputs = request()->only('user_id', 'user_name', 'email');
        $user = User::find($inputs['user_id']);
        //set rules except user name and email
        $rules = [
            'name' => 'required|between:5,255',
            'sltCate' => 'required',
            'address' => 'required|between:6,255',
            'phone' => 'required|numeric',
        ];
        //check user name in input the same old user name
        if ($inputs['user_name'] == $user->user_name) {
            $rules['user_name'] = 'required|between:5,255';
        } else {
            $rules['user_name'] = 'required|between:5,255|unique:users';
        }

        //check email in input the same old email
        if ($inputs['email'] == $user->email) {
            $rules['email'] = 'required|email';
        } else {
            $rules['email'] = 'required|email|unique:users';
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'sltCate.required' => 'Vui lòng chọn quyền đăng nhập !'
        ];
    }

}
