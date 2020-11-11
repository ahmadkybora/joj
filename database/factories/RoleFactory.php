<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Http\Models\Role;
use Faker\Generator as Faker;

$factory->define(Role::class, function (Faker $faker) {
    return [
        'user_id'=>random_int(1,2),
        'roleName'=>$faker->name,
        'roleCreator'=>$faker->name,
        'description'=>$faker->name,
    ];
});
