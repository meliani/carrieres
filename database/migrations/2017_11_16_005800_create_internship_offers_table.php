<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInternshipOffersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internship_offers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_responsable');
            $table->string('raison_sociale');
            $table->string('lieu_de_stage');
            $table->string('fonction')->nullable();
            $table->string('telephone')->nullable();
            $table->string('email')->nullable();
            $table->text('intitule_sujet');
            $table->text('descriptif')->nullable();
            $table->string('mots_cles')->nullable();
            $table->string('document_offre')->nullable();
            $table->boolean('is_valid')->nullable();
            $table->integer('status')->nullable();
            $table->date('expire_at')->nullable();
            $table->integer('applyable')->unsigned()->nullable();
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
        Schema::drop('internship_offers');
    }
}
