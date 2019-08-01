<?php

use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $banners = [
            [
                'albums_id' => 1,
                'name' => $faker->name,
                'description' => $faker->paragraph(),
                'image_path' => 'img/user.png',
                'url' => ''
            ],
            [
                'albums_id' => 1,
                'name' => $faker->name,
                'description' => $faker->paragraph(),
                'image_path' => 'img/user.png',
                'url' => ''
            ],
            [
                'albums_id' => 2,
                'name' => $faker->name,
                'description' => $faker->paragraph(),
                'image_path' => 'img/user.png',
                'url' => ''
            ],
            [
                'albums_id' => 2,
                'name' => $faker->name,
                'description' => $faker->paragraph(),
                'image_path' => 'img/user.png',
                'url' => ''
            ],
            [
                'albums_id' => 3,
                'name' => $faker->name,
                'description' => $faker->paragraph(),
                'image_path' => 'img/user.png',
                'url' => ''
            ]
        ];

        DB::table('banners')->insert($banners);
    }
}
