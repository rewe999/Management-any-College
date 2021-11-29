<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Http\Models\Form;
use App\Http\Models\FormAttachments;
use Faker\Generator as Faker;

$factory->define(FormAttachments::class, function (Faker $faker) {
    return [
        'form_id' => Form::all()->random(),
        'file' => $faker->url,
    ];
});
