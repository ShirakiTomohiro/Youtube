<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;



class CreateMovieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('movie', function (Blueprint $table) {
         //$table->increments('id');
         $table->string('rank');
         $table->string('thumbnail');
         $table->string('title');
         $table->string('regist_num');
         $table->string('views_num');
         $table->string('video_num');
         $table->string('channel_url');
         $table->string('channelId');
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
        Schema::dropIfExists('movie');
    }
}
