<?php

use Illuminate\Database\Seeder;

class CalendarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('calendars')->insert([
            'match_id' => 1,
            'competition_id' => 1
        ]);
    }
}
