<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateMovie2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('movie2', function (Blueprint $table) {
            
            $table->string('user_name');
            //$table->renameColumn('user_id', 'id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('movie2', function (Blueprint $table) {
            $table->dropColumn('user_name');
            //$table->renameColumn('id', 'user_name');
        });
    }
}
