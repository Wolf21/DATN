<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('users')->delete();

        $users = [
            [
                'id' => 1,
                'user_name' => 'admin',
                'email' => 'cuongnq211@gmail.com',
                'name' => 'Admin',
                'password' => '123456',
                'role' => \App\Enums\Role::ADMIN,
                'phone' => '0868896944',
                'address' => 'Ho chi minh',
                'status' => 1,
                'created_at' => '2018-11-23 20:44:11',
                'updated_at' => '2018-12-17 02:55:05',
            ],
            [

                'id' => 2,
                'user_name' => 'user',
                'email' => 'cgvnd123@gmail.com',
                'name' => 'User',
                'password' => '123456',
                'role' => \App\Enums\Role::USER,
                'phone' => '0868896944',
                'address' => 'dl',
                'status' => 1,
                'created_at' => '2018-12-25 21:45:02',
                'updated_at' => '2018-12-25 21:45:02',
            ]
        ];
        foreach ($users as $user) {
            User::create($user);
        }
        for ($i = 3; $i<= 10; $i++) {
            User::create([
                'id' => $i,
                'user_name' => 'user' . $i,
                'email' => $i . 'cgvnd123@gmail.com',
                'name' => 'User' .''. $i,
                'password' => '123456',
                'role' => rand(1,2),
                'phone' => '0868896944',
                'address' => 'dl',
                'status' => 1,
            ]);
        }


    }
}
