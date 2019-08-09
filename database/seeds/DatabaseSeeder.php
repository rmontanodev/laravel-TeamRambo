<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTypesSeeder::class);
        $this->call(UsersSeeder::class);

        $this->call(PositionsSeeder::class);
        $this->call(StadiumsSeeder::class);
        $this->call(TeamsSeeder::class);

        $this->call(CoachesSeeder::class);
        $this->call(PlayersSeeder::class);
        $this->call(PlayersStatsSeeder::class);

        $this->call(CompetitionsSeeder::class);
        $this->call(MatchesSeeder::class);
        $this->call(CalendarsSeeder::class);
        $this->call(ClassificationsSeeder::class);

        $this->call(CommentsSeeder::class);
    }
}
