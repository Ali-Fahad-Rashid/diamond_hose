<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavouriteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favourite', function (Blueprint $table) {
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
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_favourite');
    }
}
