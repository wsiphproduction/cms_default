<?php

use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $setting = [
            'id' => 1,
            'api_key' => '123456789',
            'website_name' => $faker->name,
            'website_favicon' => 'user.png',
            'company_logo' => 'user.png',
            'company_favicon' => 'user.png',
            'company_name' => $faker->name,
            'google_analytics' => '',
            'google_recaptcha_sitekey' => Str::random(32),
            'google_recaptcha_secret' => Str::random(32),
            'data_privacy_title' => $faker->title(),
            'data_privacy_popup_content' => $faker->title(),
            'data_privacy_content' => $faker->title()
        ];

        DB::table('settings')->insert($setting);
    }
}
