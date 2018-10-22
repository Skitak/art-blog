<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOnDeletePostsSub extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subcategories', function(Blueprint $table){
            $table->dropForeign(['category_id']);
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });

        Schema::table('galeries', function(Blueprint $table){
            $table->dropForeign(['subcategory_id']);
            $table->foreign('subcategory_id')->references('id')->on('subcategories')->onDelete('cascade');
        });

        Schema::table('posts', function(Blueprint $table){
            $table->dropForeign(['galery_id']);
            $table->foreign('galery_id')->references('id')->on('galeries')->onDelete('cascade');
        });

        Schema::table('comments', function(Blueprint $table){
            $table->dropForeign(['article_id']);
            $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subcategories', function(Blueprint $table){
            $table->dropForeign(['category_id']);
            $table->foreign('category_id')->references('id')->on('categories');
        });

        Schema::table('galeries', function(Blueprint $table){
            $table->dropForeign(['subcategory_id']);
            $table->foreign('subcategory_id')->references('id')->on('subcategories');
        });

        Schema::table('posts', function(Blueprint $table){
            $table->dropForeign(['galery_id']);
            $table->foreign('galery_id')->references('id')->on('galeries');
        });

        Schema::table('comments', function(Blueprint $table){
            $table->dropForeign(['article_id']);
            $table->foreign('article_id')->references('id')->on('articles');
        });
    }
}
