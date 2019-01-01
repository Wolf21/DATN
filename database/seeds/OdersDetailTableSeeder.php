<?php

use Illuminate\Database\Seeder;

class OdersDetailTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('oders_detail')->delete();
        
        \DB::table('oders_detail')->insert(array (
            0 => 
            array (
                'id' => 1,
                'pro_id' => 1,
                'qty' => 1,
                'o_id' => 1,
                'created_at' => '2018-12-01 19:52:14',
                'updated_at' => '2018-12-01 19:52:14',
            ),
            1 => 
            array (
                'id' => 2,
                'pro_id' => 1,
                'qty' => 1,
                'o_id' => 1,
                'created_at' => '2018-12-01 19:52:14',
                'updated_at' => '2018-12-01 19:52:14',
            ),
            2 => 
            array (
                'id' => 3,
                'pro_id' => 9,
                'qty' => 1,
                'o_id' => 2,
                'created_at' => '2018-12-01 19:55:27',
                'updated_at' => '2018-12-01 19:55:27',
            ),
            3 => 
            array (
                'id' => 4,
                'pro_id' => 6,
                'qty' => 1,
                'o_id' => 2,
                'created_at' => '2018-12-01 19:55:27',
                'updated_at' => '2018-12-01 19:55:27',
            ),
            4 => 
            array (
                'id' => 10,
                'pro_id' => 8,
                'qty' => 1,
                'o_id' => 6,
                'created_at' => '2018-12-01 20:32:39',
                'updated_at' => '2018-12-01 20:32:39',
            ),
            5 => 
            array (
                'id' => 11,
                'pro_id' => 5,
                'qty' => 1,
                'o_id' => 6,
                'created_at' => '2018-12-01 20:32:39',
                'updated_at' => '2018-12-01 20:32:39',
            ),
            6 => 
            array (
                'id' => 13,
                'pro_id' => 9,
                'qty' => 2,
                'o_id' => 8,
                'created_at' => '2018-12-17 03:52:19',
                'updated_at' => '2018-12-17 03:52:19',
            ),
            7 => 
            array (
                'id' => 14,
                'pro_id' => 1,
                'qty' => 1,
                'o_id' => 9,
                'created_at' => '2018-12-17 04:50:09',
                'updated_at' => '2018-12-17 04:50:09',
            ),
            8 => 
            array (
                'id' => 15,
                'pro_id' => 2,
                'qty' => 1,
                'o_id' => 10,
                'created_at' => '2018-12-17 04:53:28',
                'updated_at' => '2018-12-17 04:53:28',
            ),
            9 => 
            array (
                'id' => 16,
                'pro_id' => 6,
                'qty' => 1,
                'o_id' => 10,
                'created_at' => '2018-12-17 04:53:28',
                'updated_at' => '2018-12-17 04:53:28',
            ),
            10 => 
            array (
                'id' => 17,
                'pro_id' => 3,
                'qty' => 1,
                'o_id' => 11,
                'created_at' => '2018-12-17 04:54:11',
                'updated_at' => '2018-12-17 04:54:11',
            ),
            11 => 
            array (
                'id' => 18,
                'pro_id' => 6,
                'qty' => 1,
                'o_id' => 12,
                'created_at' => '2018-12-17 06:42:29',
                'updated_at' => '2018-12-17 06:42:29',
            ),
            12 => 
            array (
                'id' => 19,
                'pro_id' => 6,
                'qty' => 1,
                'o_id' => 12,
                'created_at' => '2018-12-17 06:42:29',
                'updated_at' => '2018-12-17 06:42:29',
            ),
            13 => 
            array (
                'id' => 20,
                'pro_id' => 5,
                'qty' => 1,
                'o_id' => 13,
                'created_at' => '2018-12-25 21:47:13',
                'updated_at' => '2018-12-25 21:47:13',
            ),
            14 => 
            array (
                'id' => 21,
                'pro_id' => 8,
                'qty' => 1,
                'o_id' => 14,
                'created_at' => '2018-12-25 21:50:44',
                'updated_at' => '2018-12-25 21:50:44',
            ),
            15 => 
            array (
                'id' => 22,
                'pro_id' => 9,
                'qty' => 1,
                'o_id' => 15,
                'created_at' => '2019-01-01 15:50:21',
                'updated_at' => '2019-01-01 15:50:21',
            ),
            16 => 
            array (
                'id' => 27,
                'pro_id' => 57,
                'qty' => 1,
                'o_id' => 17,
                'created_at' => '2019-01-01 16:49:50',
                'updated_at' => '2019-01-01 16:49:50',
            ),
            17 => 
            array (
                'id' => 28,
                'pro_id' => 56,
                'qty' => 1,
                'o_id' => 17,
                'created_at' => '2019-01-01 16:49:50',
                'updated_at' => '2019-01-01 16:49:50',
            ),
            18 => 
            array (
                'id' => 29,
                'pro_id' => 57,
                'qty' => 1,
                'o_id' => 18,
                'created_at' => '2019-01-01 16:49:50',
                'updated_at' => '2019-01-01 16:49:50',
            ),
            19 => 
            array (
                'id' => 30,
                'pro_id' => 56,
                'qty' => 1,
                'o_id' => 18,
                'created_at' => '2019-01-01 16:49:50',
                'updated_at' => '2019-01-01 16:49:50',
            ),
        ));
        
        
    }
}