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
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('civility');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->string('telephone');
            $table->string('cv');
            $table->string('photo');
            $table->string('option');
            $table->integer('internship_id');
            $table->timestamps();

        $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('restrict');

        $table->unique(['user_id', 'offre_de_stage_id']);
        });


    Schema::create('student_user', function (Blueprint $table) {
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
