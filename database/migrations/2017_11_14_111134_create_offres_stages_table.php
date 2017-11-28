<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateoffresStagesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offres_stages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_responsable');
            $table->string('raison_sociale');
            $table->string('lieu_de_stage');
            $table->string('fonction');
            $table->string('telephone');
            $table->string('email');
            $table->text('intitules_sujets');
            $table->text('mots_cles');
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
        Schema::drop('offres_stages');
    }
}
