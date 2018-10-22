<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkSubpostsComments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('subcategories', function(Blueprint $table){
            $table->unsignedInteger('front_post_id')->nullable(true)->default(null);
            $table->unsignedInteger('category_id');
            $table->foreign('front_post_id')->references('id')->on('posts');
            $table->foreign('category_id')->references('id')->on('categories');
        });

        Schema::table('comments', function(Blueprint $table){
            $table->unsignedInteger('article_id');
            $table->foreign('article_id')->references('id')->on('articles');
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
            $table->dropColumn('front_post_id');
            $table->dropColumn('category_id');
        });

        Schema::table('comments', function(Blueprint $table){
            $table->dropForeign(['article_id']);
            $table->dropColumn('article_id');
        });
    }
}
