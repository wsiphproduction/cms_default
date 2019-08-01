<?php

use Illuminate\Database\Seeder;

class MenusHasPagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menusHasPages = [
            [
                'parent_pages_id' => 0,
                'pages_id' => 1,
                'pages_order'=> 1,
                'uri' => ''
            ],
            [
                'parent_pages_id' => 0,
                'pages_id' => 2,
                'pages_order'=> 1,
                'uri' => ''
            ],
            [
                'parent_pages_id' => 1,
                'pages_id' => 3,
                'pages_order'=> 1,
                'uri' => ''
            ],
            [
                'parent_pages_id' => 1,
                'pages_id' => 0,
                'pages_order'=> 2,
                'uri' => 'gmail.com'
            ]
        ];

        DB::table('menus_has_pages')->insert($menusHasPages);
    }
}
