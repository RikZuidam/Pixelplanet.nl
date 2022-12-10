<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User Create
        $user = DB::table('authenticate')->insert([
            'email' => 'kai@kai.kai',
            'password' => Hash::make('kai'),
            'role' => 1
        ]);

        $user = DB::table('authenticate')->insert([
            'email' => 'rik@rik.rik',
            'password' => Hash::make('rik'),
            'role' => 1
        ]);

        $user = DB::table('authenticate')->insert([
            'email' => 'user@user.user',
            'password' => Hash::make('user')
        ]);

        \App\Models\Player::factory(10)->create();
    }
}
