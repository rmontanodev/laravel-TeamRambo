<?php

use Illuminate\Database\Seeder;

class CoachesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coaches')->insert([
            'team_id' => 1,
            'name' => 'Ernesto Valverde',
            'age' => 55,
            'country' => 'Spain'
        ]);

        DB::table('coaches')->insert([
            'team_id' => 2,
            'name' => 'Zinédine Zidane',
            'age' => 47,
            'country' => 'France'
        ]);

    }
}
