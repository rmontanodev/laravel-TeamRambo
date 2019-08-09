<?php

use Illuminate\Database\Seeder;

class PositionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('positions')->insert([
            'name' => 'Goal Keeper',
            'abbrevation' => 'GK',
        ]);

        DB::table('positions')->insert([
            'name' => 'Right Wingback',
            'abbrevation' => 'RWB',
        ]);

        DB::table('positions')->insert([
            'name' => 'Left Wingback',
            'abbrevation' => 'LWB',
        ]);

        DB::table('positions')->insert([
            'name' => 'Right Back',
            'abbrevation' => 'RB',
        ]);

        DB::table('positions')->insert([
            'name' => 'Left Back',
            'abbrevation' => 'LB',
        ]);

        DB::table('positions')->insert([
            'name' => 'Centre Back',
            'abbrevation' => 'CB',
        ]);

        DB::table('positions')->insert([
            'name' => 'Defensive Midfielder',
            'abbrevation' => 'DM',
        ]);

        DB::table('positions')->insert([
            'name' => 'Right Winger',
            'abbrevation' => 'RW',
        ]);

        DB::table('positions')->insert([
            'name' => 'Left Winger',
            'abbrevation' => 'LW',
        ]);

        DB::table('positions')->insert([
            'name' => 'Centre Midfielder',
            'abbrevation' => 'CM',
        ]);

        DB::table('positions')->insert([
            'name' => 'Attacking Midfielder',
            'abbrevation' => 'CM',
        ]);

        DB::table('positions')->insert([
            'name' => 'Right Forward',
            'abbrevation' => 'RF',
        ]);

        DB::table('positions')->insert([
            'name' => 'Left Forward',
            'abbrevation' => 'LF',
        ]);

        DB::table('positions')->insert([
            'name' => 'Centre Forward',
            'abbrevation' => 'CF',
        ]);

        DB::table('positions')->insert([
            'name' => 'Striker',
            'abbrevation' => 'ST',
        ]);
    }
}
