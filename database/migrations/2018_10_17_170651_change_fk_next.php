<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeFkNext extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::table('articles', function(Blueprint $table) {
        //     $table->dropColumn(['next_id']);
        // });        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function(Blueprint $table) {
            $table->integer('next_id')->unsigned()->nullable(true)->default(null);
            $table->foreign('next_id')->references('id')->on('articles');
        });
    }
}
