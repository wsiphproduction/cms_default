<?php

use Illuminate\Database\Seeder;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $albums = [
            [
                'name' => $faker->name,
                'description' => $faker->paragraph(),
                'transition_in' => 'fade_in',
                'transition_out' => 'fade_out',
                'transition' => 5,
                'album_type' => 'main_banner'
            ],
            [
                'name' => $faker->name,
                'description' => $faker->paragraph(),
                'transition_in' => 'fade_in',
                'transition_out' => 'fade_out',
                'transition' => 5,
                'album_type' => 'sub_banner'
            ],
            [
                'name' => $faker->name,
                'description' => $faker->paragraph(),
                'transition_in' => 'fade_in',
                'transition_out' => 'fade_out',
                'transition' => 5,
                'album_type' => 'sub_banner'
            ]
        ];

        DB::table('albums')->insert($albums);
    }
}
