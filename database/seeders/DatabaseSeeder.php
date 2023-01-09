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
            'email' => 'gulakate0112@gmail.com',
            'password' => bcrypt('konova88888888'),
            'role' => 'admin',
            'user_state' => 0,
        ]);

        DB::table('services')->insert([
            [
                'id' => 1,
                'name' => 'vip',
                'description' => 'vip service to 10 days',
                'term' => 10,
                'show_term' => '10 Дней',
                'price' => 3.00,
            ],
            [
                'id' => 2,
                'name' => 'vip',
                'description' => 'vip service to 30 days',
                'term' => 30,
                'show_term' => '30 Дней',
                'price' => 7.00,
            ],
            [
                'id' => 3,
                'name' => 'vip',
                'description' => 'vip service to 90 days',
                'term' => 90,
                'show_term' => '90 Дней',
                'price' => 15.00,
            ],
            [
                'id' => 4,
                'name' => 'top',
                'description' => 'top service to 10 days',
                'term' => 10,
                'show_term' => '10 Дней',
                'price' => 4.00,
            ],
            [
                'id' => 5,
                'name' => 'top',
                'description' => 'top service to 30 days',
                'term' => 30,
                'show_term' => '30 Дней',
                'price' => 9.00,
            ],
            [
                'id' => 6,
                'name' => 'top',
                'description' => 'top service to 90 days',
                'term' => 90,
                'show_term' => '90 Дней',
                'price' => 20.00,
            ],
            [
                'id' => 7,
                'name' => 'premium',
                'description' => 'premium service to 30 days',
                'term' => 30,
                'show_term' => '30 Дней',
                'price' => 12.00,
            ],
            [
                'id' => 8,
                'name' => 'banner',
                'description' => 'banner service to 10 days',
                'term' => 10,
                'show_term' => '10 Дней',
                'price' => 15.00,
            ],
            [
                'id' => 9,
                'name' => 'banner',
                'description' => 'banner service to 20 days',
                'term' => 20,
                'show_term' => '20 Дней',
                'price' => 25.00,
            ],
            [
                'id' => 10,
                'name' => 'banner',
                'description' => 'banner service to 30 days',
                'term' => 30,
                'show_term' => '30 Дней',
                'price' => 35.00,
            ],
        ]);  
    }
}
