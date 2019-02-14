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
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'role' => $faker->randomElement(['root']),
        'status' => $faker->randomElement(['active', 'inactive']),
        'password' => '$2y$10$vJqdE22fAfLTZK4ZqFwUqek4IGa4aBpQ7PQUzGMOgWCq.RDbTJ/Ye', // demo
        'remember_token' => str_random(10),
        'image_url' => $faker->optional()->imageUrl()
    ];
});
