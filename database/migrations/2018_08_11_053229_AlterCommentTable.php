<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comments', function (Blueprint $table) {
            
            //add post id
           $table->integer('post_id')->unsigned()->nullable()->after('id');
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade')->onUpdate('cascade');
           // 
            $table->integer('user_id')->unsigned()->nullable()->after('id');
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
        Schema::table('comments', function (Blueprint $table) {
            
            // 1. Drop foreign key constraints
            $table->dropForeign(['post_id']);

            // 2. Drop the column
            $table->dropColumn('post_id');

            // 1. Drop foreign key constraints
            $table->dropForeign(['user_id']);

            // 2. Drop the column
            $table->dropColumn('user_id');
        });
    }
}
