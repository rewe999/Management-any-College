<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Http\Models\Form;
use App\Http\Models\People;
use App\Http\Models\Scientific;
use Faker\Generator as Faker;

$factory->define(Scientific::class, function (Faker $faker) {
    $users = People::pluck('id')->toArray();
    return [
        'data' => $faker->text(40),
        'people_id' => $faker->randomElement($users),
    ];
});
