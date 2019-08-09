<?php

use Illuminate\Database\Seeder;

class StadiumsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stadiums')->insert([
            'name' => 'Camp Nou',
            'capacity' => 	81044,
            'city' => 'Barcelona',
            'address' => 'C/ Aristides Maillol, 12, 08028',
            'country' => 'Spain',
            'year_constructed' => '1957'
        ]);

        DB::table('stadiums')->insert([
            'name' => 'Santiago Bernabéu',
            'capacity' => 	99354,
            'city' => 'Madrid',
            'address' => 'Avda. Concha Espina, 1, 28036',
            'country' => 'Spain',
            'year_constructed' => '1947'
        ]);
    }
}
