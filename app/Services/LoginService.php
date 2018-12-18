<?php

namespace App\Services;


use App\Models\User;

class LoginService
{
    /**
     * get User Information
     *
     * @param $name
     * @return mixed
     */
    public static function getUserByName($name)
    {
        return User::where('name', 'LIKE BINARY', $name)
            ->first();
    }

    /**
     * get message to show on view , to insert login history follow case check error
     *
     * @param $user
     * @return array
     */
    public static function getMessage($user)
    {
        //check account not exist
        if (!$user) {
            return [
                'msg' => iniGetMessage('MSG_INCORRECT_USER_OR_PASSWORD')
            ];
        } elseif (!$user->status) {
            return [
                'msg' => iniGetMessage('MSG_USER_IN_ACTIVE')
            ];
        }
        return [];
    }
}