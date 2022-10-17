<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderrTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderr', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('post_title');
            $table->string('post_id');
            $table->string('post_user');
            $table->string('post_content');
            $table->integer('post_user_id');
            $table->string('post_desc');
            $table->string('post_image');
            $table->string('post_tags');
            $table->string('post_status');
            $table->string('price');
            $table->json('size');
            $table->json('color');
            $table->string('categories');
            $table->string('copmany');
            $table->string('country');
            $table->string('type');
            $table->string('number');
            $table->json('images');
            $table->string('number2');
            $table->string('price2');
            $table->string('price3');
            $table->string('coupon');
            $table->string('old_price');
            $table->string('advertisement');
            $table->string('types');
            $table->string('com');
            $table->string('email');
            $table->string('avg');
            $table->string('star_status');
            $table->string('price_coupon');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderr');
    }
}
