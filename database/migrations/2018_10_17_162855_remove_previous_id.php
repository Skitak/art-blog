<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RemovePreviousId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('articles', function(Blueprint $table) {
            $table->dropForeign('articles_previous_id_foreign');
        });

        Schema::table('articles', function(Blueprint $table) {
            $table->dropColumn(['previous_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('articles', function(Blueprint $table) {
            $table->integer('previous_id')->unsigned()->nullable(true)->default(null);
            $table->foreign('previous_id')->references('id')->on('articles');
        });

    }
}
