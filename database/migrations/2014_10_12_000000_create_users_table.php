<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_name', 25)->unique();
            $table->string('email')->unique();
            $table->string('name')->nullable();
            $table->string('password');
            $table->tinyInteger('role')->default(2);
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->tinyInteger('status')->default(1)->comment('1:active, 0:inactive');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
