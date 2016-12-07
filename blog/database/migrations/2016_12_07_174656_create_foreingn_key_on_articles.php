<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeingnKeyOnArticles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropColumn('user_id');
            $table->dropColumn('category_id');
        });

         Schema::table('articles', function (Blueprint $table) {
            $table->integer('user_id')->unsigned()->nullable()->index();
            $table->integer('category_id')->unsigned()->nullable()->index();
        });

        Schema::table('articles', function (Blueprint $table) {

            $table->engine='InnoDB';
            $table->foreign('user_id')->on('users')->references('id')->onDelete('set null');
            $table->foreign('category_id')->on('categories')->references('id')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {
            //
        });
    }
}
