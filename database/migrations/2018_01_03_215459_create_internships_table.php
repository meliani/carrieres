<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInternshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internships', function (Blueprint $table) {
            $table->increments('id');
            $table->string('raison_sociale');
            $table->string('adresse');
            $table->string('ville');
            $table->string('pays');
            $table->string('parrain_titre');
            $table->string('parrain_nom');
            $table->string('parrain_prenom');
            $table->string('parrain_fonction');
            $table->string('parrain_tel');
            $table->string('parrain_mail');
            $table->string('encadrant_ext_titre');
            $table->string('encadrant_ext_nom');
            $table->string('encadrant_ext_prenom');
            $table->string('encadrant_ext_fonction');
            $table->string('encadrant_ext_tel');
            $table->string('encadrant_ext_mail');
            $table->string('encadrant_int_titre');
            $table->string('encadrant_int_nom');
            $table->string('encadrant_int_prenom');
            $table->string('encadrant_int_mail');
            $table->string('co_encadrant_int_titre')->nullable();
            $table->string('co_encadrant_int_nom')->nullable();
            $table->string('co_encadrant_int_prenom')->nullable();
            $table->string('co_encadrant_int_mail')->nullable();
            $table->string('intitule');
            $table->text('descriptif');
            $table->string('keywords');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->integer('foreign')->nullable();
            $table->integer('remuneration')->nullable();
            $table->integer('charge')->nullable();
            $table->integer('user_id')->unsigned()->nullable();            
            $table->integer('nbr_advisors')->unsigned()->nullable();            

            $table->timestamps();

            $table->softDeletes();
            $table->foreign('user_id')->references('id')->on('users')
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
        Schema::dropIfExists('internships');
    }
}
