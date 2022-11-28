<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('student');
            $table->integer('type1')->comment('美國隊長')->nullable();
            $table->integer('type2')->comment('雷神索爾')->nullable();
            $table->integer('type3')->comment('蜘蛛人')->nullable();
            $table->integer('type4')->comment('鋼鐵人')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
}
