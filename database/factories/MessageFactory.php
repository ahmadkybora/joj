<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Http\Models\Message;
use Faker\Generator as Faker;

$factory->define(Message::class, function (Faker $faker) {
    return [
        'user_id' => random_int(1, 3),
        'message_title' => $faker->name,
        'message_description' => $faker->text,
    ];
});
