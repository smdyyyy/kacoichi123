<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'content' => $faker->paragraph,
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
        'prefecture_id' => function(){
            return factory(App\Prefecture::class)->create()->id;
        },
        'category_id' => function(){
            return factory(App\Category::class)->create()->id;
        },
        'adress' => $faker->address,
        'image' => 'abc.png',
    ];
});
