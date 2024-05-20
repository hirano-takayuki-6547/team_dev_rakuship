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
           ['name' => 'testuser', 'email' => 'testuser@example.com', 'password' => Hash::make('test0520')]
       ];
       \DB::table('users')->insert($data);
    }
}
