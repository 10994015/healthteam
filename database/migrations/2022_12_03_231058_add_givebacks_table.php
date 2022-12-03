<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGivebacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('givebacks', function (Blueprint $table) {
            $table->integer('q7');
            $table->integer('q8');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('givebacks', function (Blueprint $table) {
            $table->dropColumn('q7');
            $table->dropColumn('q8');
        });
    }
}
