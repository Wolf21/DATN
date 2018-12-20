<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(ProDetailsTableSeeder::class);
        $this->call(DetailImgTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(BannersTableSeeder::class);
        $this->call(OdersTableSeeder::class);
        $this->call(OdersDetailTableSeeder::class);
    }
}
