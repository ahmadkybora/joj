<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Http\Models\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'user_id' => random_int(1, 3),
        'parent'=>random_int(0,0),
        'creator' => $faker->word,
        'category_name' => $faker->word,
        'category_description' => $faker->word,
    ];
});
