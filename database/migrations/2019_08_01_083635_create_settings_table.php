<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->integer('id');
            $table->text('api_key');
            $table->string('website_name', 150);
            $table->text('website_favicon');
            $table->text('company_logo');
            $table->text('company_favicon');
            $table->string('company_name', 150);
            $table->text('google_analytics');
            $table->text('google_recaptcha_sitekey');
            $table->text('google_recaptcha_secret');
            $table->string('data_privacy_title', 150);
            $table->string('data_privacy_popup_content', 150);
            $table->text('data_privacy_content');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
