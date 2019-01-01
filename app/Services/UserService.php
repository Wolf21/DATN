<?php

namespace App\Services;


use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

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

    /**
     * @param $inputs
     */
    public static function registerUser($inputs)
    {
        $data = [
            'user_name' => $inputs['user_name'],
            'password' => $inputs['password'],
            'email' => $inputs['email'],
            'name' => $inputs['user_name'],
        ];
        \DB::beginTransaction();
        try {
            User::create($data);
            \DB::commit();
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
            abort(500);
            \DB::rollBack();
        }
    }

    /**
     * @param $inputs
     */
    public static function updateUser($inputs)
    {
        $data = [
            'user_name' => $inputs['user_name'],
            'role' => $inputs['sltCate'],
            'email' => $inputs['email'],
            'name' => $inputs['user_name'],
            'address' => $inputs['address'],
            'phone' => $inputs['phone'],
        ];
        \DB::beginTransaction();
        try {
            User::where('id', $inputs['user_id'])->update($data);
            \DB::commit();
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
            abort(500);
            \DB::rollBack();
        }
    }

}
