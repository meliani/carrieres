<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOffersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_responsable');
            $table->string('raison_sociale');
            $table->string('lieu_de_stage');
            $table->string('fonction');
            $table->string('telephone');
            $table->string('email');
            $table->text('intitule_sujet');
            $table->text('descriptif');
            $table->string('mots_cles')->nullable();
            $table->string('document_offre')->nullable();
            $table->boolean('is_valid')->nullable();
            $table->integer('status')->nullable();
            $table->timestamp('expire_at')->nullable();
            $table->boolean('applyable')->nullable();
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
        Schema::drop('offers');
    }
}
