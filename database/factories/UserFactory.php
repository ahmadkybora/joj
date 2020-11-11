<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'user_id'=>random_int(1,2),
        'type'=>random_int(1,1),
        'sex' => random_int(0, 1),
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'username' => $faker->unique()->name,
        'email' => $faker->unique()->safeEmail,
        'home_phone'=>random_int(0, 1),
        'mobile'=>random_int(0, 1),
        'password' => Hash::make($faker->password),
        'api_token' => Str::random(80),
    ];
});
