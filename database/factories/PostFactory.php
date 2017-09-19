<?php

use Faker\Generator as Faker;

use App\User;
use App\Categories;

$factory->define(App\Posts::class, function (Faker $faker) {

    return [
    'title' => $faker->text(40),
    'slug' => $faker->text(40),
    'description' => $faker->text(200),
    'cost' =>$faker->biasedNumberBetween(100, 2000),
    'user_id' => User::all()->random()->id,
    'category_id' => Categories::all()->random()->id,

    ];
});
