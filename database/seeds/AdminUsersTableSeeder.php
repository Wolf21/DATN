<?php

use Illuminate\Database\Seeder;

class AdminUsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('admin_users')->delete();
        
        \DB::table('admin_users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'SupperAdmin',
                'email' => 'scodeweb2018@gmail.com',
                'password' => '$2y$10$q3UFgqoa.mt5Yx1dVEBT.ee6CZkLk7p7U4Y.kbYQh6PLJ/mxgenJm',
                'level' => '100',
                'remember_token' => 'LqqsfGhinUkm3Rh5DLiP7EqVKU61F6l0JMU0DhOodMsHeWNfGQ3i4KoGw2zi',
                'created_at' => '2018-12-05 00:38:38',
                'updated_at' => '2018-12-05 02:46:22',
            ),
        ));
        
        
    }
}
