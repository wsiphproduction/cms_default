<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Banner;
use Faker\Generator as Faker;

$factory->define(Banner::class, function (Faker $faker) {
    return [
        'albums_id' => factory(Album::class)->create()->id,
        'name' => $faker->name(),
        'description' => $faker->paragraph(),
        'image_path' => 'img/user.png',
        'url' => url('/')
    ];
});
