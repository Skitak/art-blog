<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkGaleriesPosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function(Blueprint $table){
            $table->foreign('galery_id')->references('id')->on('galeries');
        });

        Schema::table('galeries', function(Blueprint $table){
            $table->foreign('subcategory_id')->references('id')->on('subcategories');
            $table->unsignedInteger('front_post_id')->nullable(true)->default(null);
            $table->foreign('front_post_id')->references('id')->on('posts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function(Blueprint $table){
            $table->dropForeign(['galery_id']);
        });

        Schema::table('galeries', function(Blueprint $table){
            $table->dropForeign(['subcategory_id']);
            $table->dropForeign(['front_post_id']);
            $table->dropColumn('front_post_id');
        });
    }
}
