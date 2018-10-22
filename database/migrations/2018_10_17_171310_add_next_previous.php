<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNextPrevious extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function(Blueprint $table) {
            $table->integer('previous_id')->unsigned()->nullable(true)->default(null);
            $table->foreign('previous_id')->references('id')->on('articles');
        });


        Schema::table('articles', function(Blueprint $table) {
            $table->integer('next_id')->unsigned()->nullable(true)->default(null);
            $table->foreign('next_id')->references('id')->on('articles');
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function(Blueprint $table) {
            $table->dropColumn(['previous_id', 'next_id']);
        });
        //
    }
}
