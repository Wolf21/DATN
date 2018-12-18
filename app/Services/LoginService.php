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
        return User::where('user_name', 'LIKE BINARY', $name)
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
                'msg' => 'Tài Khoản Hoặc Mật Khẩu Không Đúng!'
            ];
        } elseif (!$user->status) {
            return [
                'msg' => 'Tài Khoản Của Bạn Đã Bị Inactive, Vui Lòng Liên Hệ Admin!'
            ];
        }
        return [];
    }
}
