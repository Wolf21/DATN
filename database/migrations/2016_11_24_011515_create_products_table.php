<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->string('intro')->nullable();
            $table->string('promo1')->nullable();
            $table->string('promo2')->nullable();
            $table->string('promo3')->nullable();
            $table->string('packet')->nullable();
            $table->text('images');
            $table->text('r_intro')->nullable();
            $table->text('review')->nullable();
            $table->string('tag')->nullable();
            $table->decimal('price', 13, 2);
            $table->tinyInteger('status');
            $table->integer('cat_id')->unsigned();
            $table->foreign('cat_id')->references('id')->on('category')->onDelete('cascade');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::drop('products');
    }
}
