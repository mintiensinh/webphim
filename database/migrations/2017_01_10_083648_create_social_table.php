<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social', function (Blueprint $table) {
            $table->increments('id');
            //$table->integer('user_id');
            //$table->string('provider_user_id');
            //$table->string('provider');
            $table->string('name');
            $table->string('email');
            $table->string('nickname');
            $table->string('avatar');
            $table->string('token');
            $table->integer('social_id');
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
        Schema::dropIfExists('social');
    }
}
