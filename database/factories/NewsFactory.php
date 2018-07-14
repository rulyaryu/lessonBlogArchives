<?php

use Faker\Generator as Faker;

$factory->define(App\Models\News::class, function (Faker $faker) {
    return [
        'author_id' => $faker->numberBetween(1, 21),
        'title' => $faker->sentence(),
        'lead' => $faker->paragraph(),
        'content' => $faker->randomHtml(2,10),
        'slug' => $faker->slug(),
        'viewsCount' => $faker->numberBetween(0, 200),
    ];
});
