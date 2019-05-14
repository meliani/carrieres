<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('url');
            $table->string('url_type');
            $table->string('icon')->nullable();
            $table->unsignedInteger('parent_id')->nullable();
            $table->unsignedInteger('profile_type')->nullable();
            $table->unsignedInteger('order')->nullable();
            $table->string('menu')->nullable();

            $table->timestamps();

            $table->foreign('parent_id')
            ->references('id')
            ->on('menus')
            ->onDelete('restrict')
            ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
