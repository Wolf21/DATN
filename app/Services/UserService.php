<?php

namespace App\Services;


use App\Models\User;

class UserService
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

}