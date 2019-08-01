<?php

use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $pages = [
            [
                'parent_pages_id' => 0,
                'albums_id' => 1,
                'slug' => $faker->name,
                'name' => $faker->name,
                'label' => $faker->name,
                'contents' => $faker->paragraph(),
                'status' => 'publish',
                'page_type' => 'default',
                'image_url' => '',
                'meta_title' => $faker->title(),
                'meta_keyword' => $faker->title(),
                'meta_description' => $faker->paragraph()
            ],
            [
                'parent_pages_id' => 0,
                'albums_id' => 2,
                'slug' => $faker->name,
                'name' => $faker->name,
                'label' => $faker->name,
                'contents' => $faker->paragraph(),
                'status' => 'publish',
                'page_type' => 'default',
                'image_url' => '',
                'meta_title' => $faker->title(),
                'meta_keyword' => $faker->title(),
                'meta_description' => $faker->paragraph()
            ],
            [
                'parent_pages_id' => 2,
                'albums_id' => 3,
                'slug' => $faker->name,
                'name' => $faker->name,
                'label' => $faker->name,
                'contents' => $faker->paragraph(),
                'status' => 'draft',
                'page_type' => 'custom',
                'image_url' => '',
                'meta_title' => $faker->title(),
                'meta_keyword' => $faker->title(),
                'meta_description' => $faker->paragraph()
            ]
        ];

        DB::table('pages')->insert($pages);
    }
}
