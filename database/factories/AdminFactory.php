<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(User::class, function () {
    return [
        'name' => "admin@admin.pl",
        'email' => "admin@admin.pl",
        'password' => Hash::make("admin@admin.pl"),
    ];
});
