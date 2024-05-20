<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = [
            ['name'=>'毛布'],
            ['name'=>'トースター'],
            ['name'=>'ギター'],
            ['name'=>'ワイングラス'],
            ['name'=>'ソファベッド'],
            ['name'=>'ペット服'],
            ['name'=>'【SMAPライブ】DVD'],
            ['name'=>'【君の名は】Blu-ray'],
            ['name'=>'テーブル'],
            ['name'=>'椅子'],
            ['name'=>'本棚'],
            ['name'=>'ベッド'],
            ['name'=>'デスク'],
            ['name'=>'クローゼット'],
            ['name'=>'食器棚'],
            ['name'=>'シェルフ'],
            ['name'=>'ベンチ'],
            ['name'=>'ワードローブ'],
            ['name'=>'ドレッサー'],
            ['name'=>'キッチンカウンター'],
            ['name'=>'タンス'],
            ['name'=>'コタツ'],
            ['name'=>'キャビネット'],
            ['name'=>'ハンガーラック'],
            ['name'=>'ベンチ'],
            ['name'=>'オットマン'],
            ['name'=>'チェスト'],
            ['name'=>'ハンモック'],
            ['name'=>'ピアノ'],
            ['name'=>'キッチンアイランド'],
            ['name'=>'パラソル'],
            ['name'=>'ガーデンチェア'],
            ['name'=>'照明器具'],
            ['name'=>'コンソールテーブル'],
            ['name'=>'ベビーベッド'],
            ['name'=>'ウォールシェルフ'],
            ['name'=>'ロッキングチェア'],
            ['name'=>'あいみょんライブタオル'],
            ['name'=>'あいみょんライブパーカー'],
            ['name'=>'アイドル缶バッジセット'],
            ['name'=>'折り畳み扇風機'],
            ['name'=>'ラブライブフィギュア'],
            ['name'=>'癒し音楽CD'],
            ['name'=>'ポーチ'],
            ['name'=>'ショルダーバッグ'],
            ['name'=>'お菓子作りキット'],
            ['name'=>'砂遊びセット'],
            ['name'=>'サッカーボール'],
            ['name'=>'ぬいぐるみ'],
            ['name'=>'絵本セット'],
            ['name'=>'お絵描きセット'],
            ['name'=>'ヘルメット'],
            [ 'name' => "ワンピース"],
        ];
        DB::table('items')->insert($item);
    }
}
