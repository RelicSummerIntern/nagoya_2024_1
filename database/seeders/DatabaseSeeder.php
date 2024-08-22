<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str; 

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),
            'height' => 170.5,
            'weight' => 65.0,
            'sex' => '1',
            'favorite_cotegory' => '2',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('store_clothes')->insert([
            [
                'picture' => 'img/gpan1.png',
                'store_id' => '1',
                'category_id' => '1',
            ],
            [
                'picture' => 'img/gpan2.png',
                'store_id' => '2',
                'category_id' => '2',
            ],
            [
                'picture' => 'img/sukesuke.png',
                'store_id' => '3',
                'category_id' => '3',
            ],
        ]);

        // DB::table('user_clothes')->insert([
        //     [
        //         'picture' => 'img/gpan1.png',
        //         'store_id' => '1',
        //         'category_id' => '1',
        //     ],
        //     [
        //         'picture' => 'img/gpan2.png',
        //         'store_id' => '2',
        //         'category_id' => '2',
        //     ],
        //     [
        //         'picture' => 'img/sukesuke.png',
        //         'store_id' => '3',
        //         'category_id' => '3',
        //     ],
        // ]);
    }
}
