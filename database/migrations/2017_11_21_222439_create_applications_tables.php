<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('offre_de_stage_id')->unsigned();
            $table->string('cv')->nullable();
            $table->string('lettre_de_motivation')->nullable();
            $table->timestamps();

        $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');

        $table->foreign('offre_de_stage_id')
            ->references('id')
            ->on('offres_de_stages')
            ->onDelete('cascade');

        $table->unique(['user_id', 'offre_de_stage_id']);
        });


    Schema::create('applyables', function (Blueprint $table) {
        $table->integer('application_id')->unsigned();
        $table->integer('applyable_id')->unsigned();
        $table->string('applyable_type');

        $table->primary(['application_id', 'applyable_id']);
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applyables');
        Schema::dropIfExists('applications');
    }
}
