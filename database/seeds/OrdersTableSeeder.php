<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('orders')->delete();
        
        \DB::table('orders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'c_id' => 11,
                'qty' => 2,
                'sub_total' => '24980000.00',
                'total' => '24980000.00',
                'status' => 0,
                'type' => 'cod',
                'note' => 'ok giao hang nhanh nhat co the',
                'created_at' => '2018-12-01 19:52:14',
                'updated_at' => '2018-12-05 01:53:57',
            ),
            1 => 
            array (
                'id' => 2,
                'c_id' => 11,
                'qty' => 2,
                'sub_total' => '24980000.00',
                'total' => '24980000.00',
                'status' => 0,
                'type' => 'cod',
                'note' => 'sad',
                'created_at' => '2018-12-01 19:55:27',
                'updated_at' => '2018-12-25 21:51:13',
            ),
            2 => 
            array (
                'id' => 6,
                'c_id' => 11,
                'qty' => 2,
                'sub_total' => '24980000.00',
                'total' => '24980000.00',
                'status' => 0,
                'type' => 'cod',
                'note' => 'ok be le',
                'created_at' => '2018-12-01 20:32:39',
                'updated_at' => '2018-12-05 01:54:07',
            ),
            3 => 
            array (
                'id' => 8,
                'c_id' => 2,
                'qty' => 2,
                'sub_total' => '31780000.00',
                'total' => '31780000.00',
                'status' => 1,
                'type' => 'cod',
                'note' => 'nhan hang nhanh',
                'created_at' => '2018-12-17 03:52:18',
                'updated_at' => '2018-12-25 21:51:28',
            ),
            4 => 
            array (
                'id' => 9,
                'c_id' => 2,
                'qty' => 1,
                'sub_total' => '15890000.00',
                'total' => '15890000.00',
                'status' => 1,
                'type' => 'paypal',
                'note' => 'PAY-39X56047VY8578917LBKSMVA',
                'created_at' => '2018-12-17 04:50:08',
                'updated_at' => '2018-12-17 04:50:08',
            ),
            5 => 
            array (
                'id' => 10,
                'c_id' => 2,
                'qty' => 2,
                'sub_total' => '34380000.00',
                'total' => '34380000.00',
                'status' => 1,
                'type' => 'cod',
                'note' => 'ghi chu',
                'created_at' => '2018-12-17 04:53:28',
                'updated_at' => '2018-12-25 21:51:35',
            ),
            6 => 
            array (
                'id' => 11,
                'c_id' => 2,
                'qty' => 1,
                'sub_total' => '15890000.00',
                'total' => '15890000.00',
                'status' => 1,
                'type' => 'cod',
                'note' => '                    
',
                'created_at' => '2018-12-17 04:54:11',
                'updated_at' => '2018-12-25 21:51:42',
            ),
            7 => 
            array (
                'id' => 12,
                'c_id' => 2,
                'qty' => 2,
                'sub_total' => '24480000.00',
                'total' => '24480000.00',
                'status' => 1,
                'type' => 'paypal',
                'note' => 'PAY-5DH63736F1042400PLBKUBIY',
                'created_at' => '2018-12-17 06:42:29',
                'updated_at' => '2018-12-17 06:42:29',
            ),
            8 => 
            array (
                'id' => 13,
                'c_id' => 2,
                'qty' => 1,
                'sub_total' => '15890000.00',
                'total' => '15890000.00',
                'status' => 1,
                'type' => 'cod',
                'note' => '                    
viet@test.com',
                'created_at' => '2018-12-25 21:47:13',
                'updated_at' => '2018-12-25 21:51:18',
            ),
            9 => 
            array (
                'id' => 14,
                'c_id' => 2,
                'qty' => 1,
                'sub_total' => '15890000.00',
                'total' => '15890000.00',
                'status' => 1,
                'type' => 'cod',
                'note' => '                    
',
                'created_at' => '2018-12-25 21:50:44',
                'updated_at' => '2018-12-25 21:51:56',
            ),
            10 => 
            array (
                'id' => 15,
                'c_id' => 2,
                'qty' => 3,
                'sub_total' => '68870000.00',
                'total' => '18490000.00',
                'status' => 1,
                'type' => 'cod',
                'note' => 'aaaa',
                'created_at' => '2019-01-01 15:50:21',
                'updated_at' => '2019-01-01 15:52:32',
            ),
            11 => 
            array (
                'id' => 17,
                'c_id' => 11,
                'qty' => 3,
                'sub_total' => '37970000.00',
                'total' => '34280000.00',
                'status' => 1,
                'type' => 'cod',
                'note' => 'cuong',
                'created_at' => '2019-01-01 16:49:50',
                'updated_at' => '2019-01-01 21:48:46',
            ),
            12 => 
            array (
                'id' => 18,
                'c_id' => 9,
                'qty' => 3,
                'sub_total' => '37970000.00',
                'total' => '34280000.00',
                'status' => 1,
                'type' => 'cod',
                'note' => 'cuong',
                'created_at' => '2019-01-01 16:49:50',
                'updated_at' => '2019-01-01 21:48:46',
            ),
        ));
        
        
    }
}