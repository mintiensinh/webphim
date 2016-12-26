<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id');
            $table->string('name');
            $table->string('summary');//tom tat
            $table->string('quality');
            $table->string('playtime');
            $table->string('image');
            $table->string('view')->nullable();
            $table->string('link')->nullable();
            $table->string('status');
            $table->integer('series movie')->nullable();//phim bo(1)
            $table->integer('odd movies')->nullable();//phim le(0)
            $table->integer('movie theaters')->nullable();//phim chieu rap(2)
            $table->integer('video_trailers')->nullable();//trailers(4)
            $table->integer('id_new')->nullable();
            //$table->integer('video_news')->nullable();//video tin tuc (5)
            $table->integer('id_cate');//the loai
            $table->integer('id_year');//nam
            $table->integer('id_country');//quoc gia
            $table->integer('id_author');//dao dien
            $table->integer('id-user');//nguoi dang
            $table->softDeletes();
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
        Schema::dropIfExists('video');
    }
}
