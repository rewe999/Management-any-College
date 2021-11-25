<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Http\Models\Organizational;
use App\Http\Models\People;
use Faker\Generator as Faker;

$factory->define(Organizational::class, function (Faker $faker) {
    $users = People::pluck('id')->toArray();
    return [
        'data' => $faker->text(80),
        'people_id' => $faker->randomElement($users),
    ];
});
