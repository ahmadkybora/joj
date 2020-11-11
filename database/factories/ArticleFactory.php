<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Http\Models\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'user_id'=>random_int(1,3),
        'creator'=>$faker->name,
        'articleTitle'=>$faker->title,
        'articleDescription'=>$faker->word,
    ];
});
