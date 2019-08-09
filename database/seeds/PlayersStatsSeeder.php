<?php

use Illuminate\Database\Seeder;

class PlayersStatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('player_stats')->insert([
            'player_id' => 3,
            'position_id' => 6,
            'jersey_number' => 4,
            'height' => 184,
            'weight' => 82,
            'weak_foot' => 'Left',
            'good_foot' => 'Right',
            'ambidextrous' => false,
            'age' => 33,
            'goals' => 61,
            'red_cards' => 6,
            'yellow_cards' => 161,
            'total_matches' => 458,
            'starting_lineup' => 452,
        ]);
    }
}
