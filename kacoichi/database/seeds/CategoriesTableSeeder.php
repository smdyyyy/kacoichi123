<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['category_name' => '景色'],
            ['category_name' => '飲食'],
            ['category_name' => '観光'],
        ]);
    }
}
