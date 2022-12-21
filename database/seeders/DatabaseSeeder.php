<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create([
            'name' => 'admin',
            'email' => 'konov@gmail.com',
            'password' => bcrypt('konov12345'),
            'role' => 'admin',
            'user_state' => 0,
        ]);

        DB::table('banners')->insert([
            [
                'id' => 1,
                'user_id' => 1,
            ],
            [
                'id' => 2,
                'user_id' => 1,
            ],
            [
                'id' => 3,
                'user_id' => 1,
            ],
            [
                'id' => 4,
                'user_id' => 1,
            ],
            [
                'id' => 5,
                'user_id' => 1,
            ],
            [
                'id' => 6,
                'user_id' => 1,
            ],
            [
                'id' => 7,
                'user_id' => 1,
            ]
        ]);
    }
}
