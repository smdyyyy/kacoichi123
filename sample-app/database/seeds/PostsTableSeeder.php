<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'user_id' => 1,
                'category_id' => 1,
                'prefecture_id' => 1,
                'title' => 'test',
                'content' => 'testです',
            ],
            [
                'user_id' => 1,
                'category_id' => 1,
                'prefecture_id' => 2,
                'title' => 'test2',
                'content' => 'testです2',
            ],
            [
                'user_id' => 1,
                'category_id' => 1,
                'prefecture_id' => 2,
                'title' => 'test3',
                'content' => 'testです3',
            ]
        ]);
    }
}
