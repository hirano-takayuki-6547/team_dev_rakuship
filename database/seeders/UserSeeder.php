<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $data = [
        ['name' => '山田一郎', 'email' => 'yamada01@example.com', 'password' => Hash::make('yamada01')],
        ['name' => '相川克典', 'email' => 'aikawa02@example.com', 'password' => Hash::make('aikawa02')],
        ['name' => '望月瞳', 'email' => 'motiduki03@example.com', 'password' => Hash::make('motiduki03')],
        ['name' => '永田奈美', 'email' => 'nagata04@example.com', 'password' => Hash::make('nagata04')],
        ['name' => '星野昇', 'email' => 'hosino05@example.com', 'password' => Hash::make('hosino05')],
        ['name' => '清水愛', 'email' => 'simizu06@example.com', 'password' => Hash::make('simizu06')],
        ['name' => '吉川秀樹', 'email' => 'yosikawa07@example.com', 'password' => Hash::make('yosikawa07')],
        ['name' => '小山綾子', 'email' => 'koyama08@example.com', 'password' => Hash::make('koyama08')],
        ['name' => '内田真央', 'email' => 'utida09@example.com', 'password' => Hash::make('utida09')],
        ['name' => '佐々木雄太', 'email' => 'sasaki10@example.com', 'password' => Hash::make('sasaki10')]
       ];
       \DB::table('users')->insert($data);
    }
}
