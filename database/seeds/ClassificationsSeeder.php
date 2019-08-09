<?php

use Illuminate\Database\Seeder;

class ClassificationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classifications')->insert([
            'competition_id' => 1,
            'team_id' => 1,
            'points' => 3
        ]);

        DB::table('classifications')->insert([
            'competition_id' => 1,
            'team_id' => 2,
            'points' => 0
        ]);
    }
}
