<?php

use Illuminate\Database\Seeder;

class PrefecturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prefectures')->insert([
            ['prefecture_name' => '北海道'],
            ['prefecture_name' => '青森'],
            ['prefecture_name' => '岩手'],
            ['prefecture_name' => '秋田'],
            ['prefecture_name' => '山形'],
            ['prefecture_name' => '宮城'],
            ['prefecture_name' => '福島'],
            ['prefecture_name' => '東京'],
            ['prefecture_name' => '神奈川'],
            ['prefecture_name' => '埼玉'],
            ['prefecture_name' => '千葉'],
            ['prefecture_name' => '栃木'],
            ['prefecture_name' => '茨城'],
            ['prefecture_name' => '群馬'],
            ['prefecture_name' => '静岡'],
            ['prefecture_name' => '山梨'],
            ['prefecture_name' => '新潟'],
            ['prefecture_name' => '長野'],
            ['prefecture_name' => '富山'],
            ['prefecture_name' => '岐阜'],
            ['prefecture_name' => '石川'],
            ['prefecture_name' => '福井'],
            ['prefecture_name' => '愛知'],
            ['prefecture_name' => '三重'],
            ['prefecture_name' => '滋賀'],
            ['prefecture_name' => '京都'],
            ['prefecture_name' => '大阪'],
            ['prefecture_name' => '奈良'],
            ['prefecture_name' => '和歌山'],
            ['prefecture_name' => '兵庫'],
            ['prefecture_name' => '徳島'],
            ['prefecture_name' => '香川'],
            ['prefecture_name' => '高知'],
            ['prefecture_name' => '愛媛'],
            ['prefecture_name' => '岡山'],
            ['prefecture_name' => '広島'],
            ['prefecture_name' => '鳥取'],
            ['prefecture_name' => '島根'],
            ['prefecture_name' => '山口'],
            ['prefecture_name' => '福岡'],
            ['prefecture_name' => '大分'],
            ['prefecture_name' => '佐賀'],
            ['prefecture_name' => '長崎'],
            ['prefecture_name' => '熊本'],
            ['prefecture_name' => '宮崎'],
            ['prefecture_name' => '鹿児島'],
            ['prefecture_name' => '沖縄'],

        ]);
    }
}
