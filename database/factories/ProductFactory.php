<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Http\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'user_id' => random_int(1, 3),
        'brand_id' => random_int(1, 3),
        'creator' => $faker->name,
        'product_name' => $faker->name,
        'product_price' => $faker->randomNumber(1),
        'product_description' => $faker->text,
        'product_code' => $faker->name,
        'product_color' => $faker->name,
    ];
});
