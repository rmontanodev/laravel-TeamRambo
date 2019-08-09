<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'superadmin_demo',
            'user_type_id' => 1,
            'email' => 'superadmin@demo.com',
            'password' => Hash::make('superadmin_demo'),
            'is_active' => true,
        ]);

        DB::table('users')->insert([
            'name' => 'admin_demo',
            'user_type_id' => 2,
            'email' => 'admin@demo.com',
            'password' => Hash::make('admin_demo'),
            'is_active' => true,
        ]);
        DB::table('users')->insert([
            'name' => 'user_demo',
            'user_type_id' => 4,
            'email' => 'user@demo.com',
            'password' => Hash::make('user'),
            'is_active' => true,
        ]);

        DB::table('users')->insert([
            'name' => 'player_demo1',
            'user_type_id' => 3,
            'player_id' => 1,
            'email' => 'player@demo.com',
            'password' => Hash::make('user'),
            'is_active' => true,
        ]);
        DB::table('users')->insert([
            'name' => 'player_demo2',
            'user_type_id' => 3,
            'player_id' => 2,
            'email' => 'player1@demo.com',
            'password' => Hash::make('user'),
            'is_active' => true,
        ]);
        DB::table('users')->insert([
            'name' => 'player_demo3',
            'user_type_id' => 3,
            'player_id' => 3,
            'email' => 'player2@demo.com',
            'password' => Hash::make('user'),
            'is_active' => true,
        ]);
        DB::table('users')->insert([
            'name' => 'player_demo4',
            'user_type_id' => 3,
            'player_id' => 4,
            'email' => 'player3@demo.com',
            'password' => Hash::make('user'),
            'is_active' => true,
        ]);
    }
}
