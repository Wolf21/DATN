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
                'user_name' => 'admin',
                'email' => 'cuongnq211@gmail.com',
                'name' => 'Admin',
                'password' => '$2y$10$DUbukoGxFCzP4qRbDFMhfOrtdQ/6p.DN6ujUgX5lr7mqv8fZRnKMC',
                'role' => 0,
                'phone' => '0889990195',
                'address' => 'Ho chi minh',
                'status' => 1,
                'remember_token' => 'C2MFaISZYe7z2kziLFuOKi7O435QRsR7mt8zlSmjH8eoLnASfBxNth3m02Ri',
                'created_at' => '2018-11-23 20:44:11',
                'updated_at' => '2018-12-17 02:55:05',
            ),
            1 => 
            array (
                'id' => 2,
                'user_name' => 'user',
                'email' => 'cgvnd123@gmail.com',
                'name' => 'User',
                'password' => '$2y$10$/wOUlxvziN2cFhbSPJ63m.PmoIVJXdudo/hADJhKsegSHHUuIZdmu',
                'role' => 2,
                'phone' => '0889990195',
                'address' => 'Da Nang',
                'status' => 1,
                'remember_token' => '1PbonMYDXoA8JfG6vMwAm7mGufl8Mcj0jjeIUYK8WR3Dj0EmPqxlsHpFQYPN',
                'created_at' => '2018-12-25 21:45:02',
                'updated_at' => '2018-12-25 21:45:02',
            ),
            2 => 
            array (
                'id' => 3,
                'user_name' => 'user3',
                'email' => '3cgvnd123@gmail.com',
                'name' => 'User3',
                'password' => '$2y$10$c19uQpus0Wy0Gb21MfcjY.6pnkJSC1ntE1mPhUpJNEnGawXRrJFCC',
                'role' => 1,
                'phone' => '0889990195',
                'address' => 'Da Nang',
                'status' => 1,
                'remember_token' => 'hbGsjG3AatBMAP3CTKiulWJ9RbsKxRmx5YxQzpQ3fH1NvpXTYmq2JZNEcwyJ',
                'created_at' => '2019-01-01 15:45:23',
                'updated_at' => '2019-01-01 15:45:23',
            ),
            3 => 
            array (
                'id' => 4,
                'user_name' => 'user4',
                'email' => '4cgvnd123@gmail.com',
                'name' => 'User4',
                'password' => '$2y$10$Rx9WG0yi5Hu229IMHa.rtuO7a4s0pM8J7n8LAz.uVG5k6/p2.9raa',
                'role' => 1,
                'phone' => '0889990195',
                'address' => 'Da Nang',
                'status' => 1,
                'remember_token' => NULL,
                'created_at' => '2019-01-01 15:45:23',
                'updated_at' => '2019-01-01 15:45:23',
            ),
            4 => 
            array (
                'id' => 5,
                'user_name' => 'user5',
                'email' => '5cgvnd123@gmail.com',
                'name' => 'User5',
                'password' => '$2y$10$wUZq7aCFfJ0454RPco6L4e6E44bf3O/2vN2.b2osIAN.O7CcYrtpC',
                'role' => 2,
                'phone' => '0889990195',
                'address' => 'Da Nang',
                'status' => 1,
                'remember_token' => NULL,
                'created_at' => '2019-01-01 15:45:23',
                'updated_at' => '2019-01-01 15:45:23',
            ),
            5 => 
            array (
                'id' => 6,
                'user_name' => 'user6',
                'email' => '6cgvnd123@gmail.com',
                'name' => 'User6',
                'password' => '$2y$10$SPwd3Dc9wobdcvBm6Uu7SuK7amIOeuCglSiR9Ga1LVLVOP8BavKxO',
                'role' => 2,
                'phone' => '0889990195',
                'address' => 'Da Nang',
                'status' => 1,
                'remember_token' => NULL,
                'created_at' => '2019-01-01 15:45:23',
                'updated_at' => '2019-01-01 15:45:23',
            ),
            6 => 
            array (
                'id' => 7,
                'user_name' => 'user7',
                'email' => '7cgvnd123@gmail.com',
                'name' => 'User7',
                'password' => '$2y$10$RrwzVaYLGX3vzuJC3tanyOfeaqrlAvAg2sCyAMYraITHGVQI6ULkq',
                'role' => 1,
                'phone' => '0889990195',
                'address' => 'Da Nang',
                'status' => 1,
                'remember_token' => NULL,
                'created_at' => '2019-01-01 15:45:23',
                'updated_at' => '2019-01-01 15:45:23',
            ),
            7 => 
            array (
                'id' => 8,
                'user_name' => 'user8',
                'email' => '8cgvnd123@gmail.com',
                'name' => 'User8',
                'password' => '$2y$10$eQPWWVqO6gLqNK1fd9EjheFANKnDgRsEZBBu2qGlc9QOy7LrbteFK',
                'role' => 1,
                'phone' => '0889990195',
                'address' => 'Da Nang',
                'status' => 1,
                'remember_token' => NULL,
                'created_at' => '2019-01-01 15:45:23',
                'updated_at' => '2019-01-01 15:45:23',
            ),
            8 => 
            array (
                'id' => 9,
                'user_name' => 'user9',
                'email' => '9cgvnd123@gmail.com',
                'name' => 'User9',
                'password' => '$2y$10$ovcHlTa9IYKSgkGEhvwNE.HFX5ZEjhhP1FtJZPjG7N6SBXGYufdg.',
                'role' => 2,
                'phone' => '0889990195',
                'address' => 'Da Nang',
                'status' => 1,
                'remember_token' => NULL,
                'created_at' => '2019-01-01 15:45:23',
                'updated_at' => '2019-01-01 15:45:23',
            ),
            9 => 
            array (
                'id' => 10,
                'user_name' => 'user10',
                'email' => '10cgvnd123@gmail.com',
                'name' => 'User10',
                'password' => '$2y$10$E7KvbJIvDqJpiauM4fEdi.vk6zjo1HR53mBguE.LYUCTO5S1mhW4G',
                'role' => 2,
                'phone' => '0889990195',
                'address' => 'Da Nang',
                'status' => 1,
                'remember_token' => NULL,
                'created_at' => '2019-01-01 15:45:23',
                'updated_at' => '2019-01-01 15:45:23',
            ),
            10 => 
            array (
                'id' => 11,
                'user_name' => 'cuong',
                'email' => 'cgvnd1231@gmail.com',
                'name' => 'cuong',
                'password' => '$2y$10$KB7h07qiOHan2SxfWlpMR.KVTlLDu5KMe5BRjAKqCkmhS31MafsZe',
                'role' => 2,
                'phone' => '0889990195',
                'address' => 'Da Nang',
                'status' => 1,
                'remember_token' => NULL,
                'created_at' => '2019-01-01 16:49:25',
                'updated_at' => '2019-01-01 16:49:25',
            ),
        ));
        
        
    }
}