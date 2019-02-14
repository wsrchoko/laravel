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

$factory->define(App\UserAccount::class, function (Faker $faker) {
    return [
        'street' => $faker->streetName(),
        'username' => $faker->lastName(),
        'city' => $faker->city(),
        'state' => $faker->state(),
        'zip' => $faker->postcode(),
        'phone' => $faker->phoneNumber(),
        'country_id' => $faker->numberBetween(1,99)
    ];
});
