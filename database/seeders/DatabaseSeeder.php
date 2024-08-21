<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('user_clothes')->insert([
            [
                'picture' => 'img/test.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'picture' => 'img/test2.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
