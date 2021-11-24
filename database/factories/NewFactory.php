<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Http\Models\News;
use Faker\Generator as Faker;

$factory->define(News::class, function (Faker $faker) {
    return [
        'title' => $faker->text(30),
        'content' => $faker->sentence(200),
        'date' => $faker->date(),
    ];
});
