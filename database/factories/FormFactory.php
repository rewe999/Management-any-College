<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Http\Models\Form;
use Faker\Generator as Faker;

$factory->define(Form::class, function (Faker $faker) {
    return [
        'title' => $faker->text(40),
        'description' => $faker->text(50),
    ];
});
