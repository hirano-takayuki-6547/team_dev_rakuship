<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category=[
            ['name'=>'ファッション'],
            ['name'=>'家具・インテリア'],
            ['name'=>'CD・DVD・Blu-ray'],
            ['name'=>'楽器・アート'],
            ['name'=>'生活家電'],
            ['name'=>'キッチン・日常用品'],
            ['name'=>'本・雑誌・漫画'],
            ['name'=>'ペット用品'],
            ['name'=>'アウトドア・旅行用品'],
            ['name'=>'ベビー・キッズ・おもちゃ'],
        ];
        \DB::table('categories')->insert($category);
    }
}
