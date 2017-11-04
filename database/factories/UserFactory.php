<?php

use Faker\Generator as Faker;

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

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'first_name' => $faker->firstName(),
        'last_name' => $faker->lastName(),
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('password'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Project::class, function (Faker $faker) {


    return [
        'name' => $faker->words(2, true),
        'description' => $faker->paragraph(),
    ];
});
$factory->define(App\Time::class, function (Faker $faker) {


    return [

        'work' => $faker->numberBetween(10,100),
    ];
});
