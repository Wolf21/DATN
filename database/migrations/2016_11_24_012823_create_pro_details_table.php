<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pro_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cpu')->nullable();
            $table->string('ram')->nullable();
            $table->string('screen')->nullable();
            $table->string('vga')->nullable();
            $table->string('storage')->nullable();
            $table->string('exten_memmory')->nullable();
            $table->string('cam1')->nullable();
            $table->string('cam2')->nullable();
            $table->string('sim')->nullable();
            $table->string('connect')->nullable();
            $table->string('pin')->nullable();
            $table->string('os')->nullable();
            $table->text('note')->nullable();
            $table->integer('pro_id')->unsigned();
            $table->foreign('pro_id')->references('id')->on('products')->onDelete('cascade');;     
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
        Schema::drop('pro_details');
    }
}
