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
            $table->string('type_stage');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email_inpt')->nullable();
            $table->string('email_autre');
            $table->string('telephone');
            $table->text('titre_rapport');
            $table->string('entreprise');
            $table->string('city');
            $table->date('starting_at');
            $table->date('ending_at');
            $table->string('nom_responsable_stage');
            $table->string('email_responsable')->nullable();
            $table->text('doc_rapport');
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
