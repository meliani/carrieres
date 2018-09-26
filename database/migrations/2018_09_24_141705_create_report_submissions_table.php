<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatereportSubmissionsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('report_submissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->string('email_autre');
            $table->text('titre_rapport');
            $table->string('entreprise');
            $table->string('ville');
            $table->string('nom_responsable_stage');
            $table->string('email_responsable');
            $table->text('doc_rapport');
            $table->text('doc_fiche_evaluation');
            $table->text('doc_convention');
            $table->text('doc_attestation');
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
        Schema::drop('report_submissions');
    }
}
