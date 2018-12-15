<?php

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
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Lhson',
                'email' => 'scodeweb2016@gmail.com',
                'password' => '$2y$10$TEY9mtHYRJ4G9oW.6n9D9.5.eHfae7I1po7iNVE8cNMsEORxtzv0m',
                'phone' => '0868896944',
                'address' => 'Ho chi minh',
                'status' => 1,
                'remember_token' => 'jFFpU4F9xl8TLtjS6DPBiI8qWugcLLXQWMtRSWx9UtBoB3TrjGpx66X8xMMh',
                'created_at' => '2016-11-23 20:44:11',
                'updated_at' => '2016-12-17 02:55:05',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'viet',
                'email' => 'viet@test.com',
                'password' => '$2y$10$l1kbe4s6eABtFVZqe5UpIese0vCemAMafuRjEPBanY8VIhZJgMUU2',
                'phone' => '0868896944',
                'address' => 'dl',
                'status' => 1,
                'remember_token' => NULL,
                'created_at' => '2016-12-25 21:45:02',
                'updated_at' => '2016-12-25 21:45:02',
            ),
        ));
        
        
    }
}