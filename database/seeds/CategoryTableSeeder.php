<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category')->delete();
        
        \DB::table('category')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'APPLE',
                'slug' => 'apple-iphone',
                'parent_id' => '0',
                'created_at' => '2016-11-23 20:01:57',
                'updated_at' => '2016-11-26 03:03:56',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'ANDROID',
                'slug' => 'android',
                'parent_id' => '0',
                'created_at' => '2016-11-23 20:10:10',
                'updated_at' => '2016-11-26 03:04:07',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'WINDOW PHONE',
                'slug' => 'window-phone',
                'parent_id' => '0',
                'created_at' => '2016-11-23 20:17:01',
                'updated_at' => '2016-11-23 20:42:30',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'TIN TỨC - KHUYỄN MẠI',
                'slug' => 'news',
                'parent_id' => '0',
                'created_at' => '2016-11-24 01:38:46',
                'updated_at' => '2016-11-24 01:38:46',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'QUẢNG CÁO - BANNER',
                'slug' => 'quang-cao-banner',
                'parent_id' => '0',
                'created_at' => '2016-11-24 01:38:57',
                'updated_at' => '2016-11-24 01:38:57',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Samsung',
                'slug' => 'samsung',
                'parent_id' => '2',
                'created_at' => '2016-11-23 20:17:39',
                'updated_at' => '2016-11-23 20:17:39',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Iphone',
                'slug' => 'iphone',
                'parent_id' => '1',
                'created_at' => '2016-11-24 01:36:10',
                'updated_at' => '2016-11-24 01:36:10',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'OPPO',
                'slug' => 'oppo',
                'parent_id' => '2',
                'created_at' => '2016-11-24 01:36:21',
                'updated_at' => '2016-11-24 01:36:21',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Huawei',
                'slug' => 'huawei',
                'parent_id' => '2',
                'created_at' => '2016-11-24 01:36:31',
                'updated_at' => '2016-11-24 01:36:31',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Xiaomi',
                'slug' => 'xiaomi',
                'parent_id' => '2',
                'created_at' => '2016-11-24 01:56:05',
                'updated_at' => '2016-11-24 01:56:05',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Vivo',
                'slug' => 'vivo',
                'parent_id' => '2',
                'created_at' => '2016-11-25 02:00:27',
                'updated_at' => '2016-11-25 02:00:27',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Sony',
                'slug' => 'sony',
                'parent_id' => '2',
                'created_at' => '2016-11-25 02:00:41',
                'updated_at' => '2016-11-25 02:00:41',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Nokia',
                'slug' => 'nokia',
                'parent_id' => '3',
                'created_at' => '2016-11-25 02:00:52',
                'updated_at' => '2016-11-25 02:00:52',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Asus - ZenFones',
                'slug' => 'asus-zenfone',
                'parent_id' => '2',
                'created_at' => '2016-11-26 00:36:11',
                'updated_at' => '2016-11-26 00:36:11',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Mobiistar',
                'slug' => 'mobiistar',
                'parent_id' => '2',
                'created_at' => '2016-11-26 00:36:27',
                'updated_at' => '2016-11-26 00:36:27',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Tin Công Nghệ',
                'slug' => 'tin-cong-nghe',
                'parent_id' => '4',
                'created_at' => '2016-11-28 18:40:09',
                'updated_at' => '2016-11-28 18:40:09',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'Tin khuyễn mại',
                'slug' => 'tin-khuyen-mai',
                'parent_id' => '4',
                'created_at' => '2016-11-28 18:40:31',
                'updated_at' => '2016-11-28 18:40:31',
            ),
        ));
        
        
    }
}