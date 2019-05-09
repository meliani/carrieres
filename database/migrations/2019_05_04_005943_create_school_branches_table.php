<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('school_branches', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('cycle_id');
            $table->unsignedInteger('parent_id')->nullable();
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
        Schema::dropIfExists('school_branches');
    }
}
