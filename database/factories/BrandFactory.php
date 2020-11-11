<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Http\Models\Brand;
use Faker\Generator as Faker;

$factory->define(Brand::class, function (Faker $faker) {
    return [
        'user_id'=>random_int(1,3),
        'creator'=>$faker->name,
        'brand_name'=>$faker->name,
        'brand_description'=>$faker->text,
    ];
});
