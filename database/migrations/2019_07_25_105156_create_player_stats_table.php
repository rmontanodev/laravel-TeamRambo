<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_stats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('player_id');
            $table->integer('position_id');
            $table->decimal('weight');
            $table->decimal('height');
            $table->integer('jersey_number');
            $table->string('weak_foot');
            $table->string('good_foot');
            $table->boolean('ambidextrous');
            $table->integer('age');
            $table->integer('goals');
            $table->integer('red_cards');
            $table->integer('yellow_cards');
            $table->integer('total_matches');
            $table->integer('starting_lineup');
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
        Schema::dropIfExists('player_stats');
    }
}
