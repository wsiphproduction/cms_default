<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusHasPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus_has_pages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_pages_id')->nullable();
            $table->integer('pages_id')->nullable();
            $table->integer('pages_order');
            $table->text('uri')->nullable();
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
        Schema::dropIfExists('menus_has_pages');
    }
}
