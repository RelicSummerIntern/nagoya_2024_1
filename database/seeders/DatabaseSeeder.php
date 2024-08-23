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
        DB::table('store')->insert([
            [
                'name' => '古着屋ミカン',
            ],
            [
                'name' => '古着屋バナナ',
            ],
            [
                'name' => '古着屋イチゴ',
            ],
            
        ]);

        // DB::table('user_clothes')->insert([
        //     [   
        //         'user_id' => '1'
        //         'picture' => 'images/1724234718.png', //変更する
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        //     [   
        //         'user_id' => '1'
        //         'picture' => 'img/1724234725.png', //変更する
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ],
        // ]);
    }
}
