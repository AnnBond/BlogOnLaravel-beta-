<?php

use Faker\Generator as Faker;

$factory->define(App\Categories::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->text(10),
        'description' => $faker->text(200),
    ];
});
