<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Album;
use Faker\Generator as Faker;

$factory->define(Album::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'description' => $faker->paragraph(),
        'transition_in' => 'fade_in',
        'transition_out' => 'fade_out',
        'transition' => 5,
        'album_type' => 'sub_banner'
    ];
});
