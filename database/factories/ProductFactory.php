<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {

    $title = $faker->sentence();
    return [
        "title" => $title,
        "slug" => str::slug($title),
        "description" => $faker->paragraph,
        "price" => $faker->numberBetween($min = 100, $max=900),
        "old_price" => $faker->numberBetween($min = 100, $max=900),
        "instock" => $faker->numberBetween($min = 1, $max=10),
        "image" => $faker->imageUrl($width = 640, $height=480),
        "category_id" => $faker->numberBetween($min = 1, $max=5),
    ];
});
