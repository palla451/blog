<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {

    $title  =   $faker->sentence;
    $slug   = str_slug($title);

    return [
        'title'     =>  $title,
        'body'      =>  $faker->text,
        'user_id'   =>  random_int(1,10),
        'slug'      =>  $slug,
    ];
});
