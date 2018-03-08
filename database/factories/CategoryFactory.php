<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {

    $category   =   ['Italia','Germania','Francia'];

    return [
        'name_category' => $category[array_rand($category,1)],
    ];
});
