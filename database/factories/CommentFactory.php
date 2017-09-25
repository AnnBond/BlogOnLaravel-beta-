<?php

use Faker\Generator as Faker;

use App\User;
use App\Post;

$factory->define(App\Comment::class, function (Faker $faker) {

    return [
        'body' => $faker->text(255),
        'user_id' => User::all()->random()->id,
        'post_id' => Post::all()->random()->id,
    ];
});
