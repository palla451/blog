<?php

use Faker\Generator as Faker;

$factory->define(App\Tag::class, function (Faker $faker) {
    return [
        'tag_name'  => $faker->word,
    ];
});
