<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateoffresDeStagesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offres_de_stages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_responsable');
            $table->string('raison_sociale');
            $table->string('lieu_de_stage');
            $table->string('fonction');
            $table->string('telephone');
            $table->string('email');
            $table->text('intitule_sujet');
            $table->text('descriptif');
            $table->string('mots_cles');
            $table->string('document_offre');
            $table->boolean('is_valid');
            $table->integer('status');
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
        Schema::drop('offres_de_stages');
    }
}
