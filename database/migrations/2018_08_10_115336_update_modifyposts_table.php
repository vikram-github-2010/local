<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateModifypostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
           $table->integer('user_id')->unsigned()->nullable()->after('body');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {

            // 1. Drop foreign key constraints
            $table->dropForeign(['user_id']);

            // 2. Drop the column
            $table->dropColumn('user_id');
        });
    }
}
