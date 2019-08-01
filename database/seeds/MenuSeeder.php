<?php

use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $menus = [
            [
                'name' => $faker->name,
                'description' => $faker->paragraph()
            ],
            [
                'name' => $faker->name,
                'description' => $faker->paragraph()
            ],
            [
                'name' => $faker->name,
                'description' => $faker->paragraph()
            ]
        ];

        DB::table('menus')->insert($menus);
    }
}
