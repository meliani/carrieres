<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInternshipTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internship_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('cycle_id');
            $table->timestamps();

            $table->foreign('cycle_id')
            ->references('id')
            ->on('school_cycles')
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
        Schema::dropIfExists('school_internship_types');
    }
}
