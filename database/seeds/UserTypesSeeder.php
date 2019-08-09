<?php

use Illuminate\Database\Seeder;

class UserTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_types')->insert([
            'role' => 'SuperAdmin',
        ]);
        DB::table('user_types')->insert([
            'role' => 'Admin',
        ]);
        DB::table('user_types')->insert([
            'role' => 'Player',
        ]);
        DB::table('user_types')->insert([
            'role' => 'User',
        ]);
    }
}
