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

    $username   =   $faker->userName;
    $slug       = str_slug($username);

    return [
        'username'          =>  $username,
        'firstname'         => $faker->firstName,
        'lastname'          =>  $faker->lastName,
        'slug'              =>  $slug,
        'email'             => $faker->unique()->safeEmail,
        'password'          => bcrypt('picasso'), // secret
        'remember_token'    => str_random(10),
    ];
});
