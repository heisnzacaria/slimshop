<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin;
use App\Model;

use Illuminate\Support\Facades\Hash;
use Faker\Generator as Faker;

$factory->define(Admin::class, function (Faker $faker) {
    return [
        'name' => "Slimane Lhajji",
        'email' => "lhajjislim@yahoo.com",
        'email_verified_at' => now(),
        'password' => Hash::make("123"), // password
        'remember_token' => Str::random(10),
    ];
});
