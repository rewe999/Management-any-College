<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Http\Models\Didactic;
use App\Http\Models\People;
use Faker\Generator as Faker;

$factory->define(Didactic::class, function (Faker $faker) {
    $users = People::pluck('id')->toArray();
    return [
        'data' => $faker->text(40),
        'url' => $faker->url,
        'people_id' => $faker->randomElement($users),
    ];
});
