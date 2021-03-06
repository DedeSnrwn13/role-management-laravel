<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'user_id' => rand(1, 3),
        'title' => $faker->sentence(4),
        'body' => $faker->paragraph(1),
        'published' => rand(0, 1)
    ];
});
