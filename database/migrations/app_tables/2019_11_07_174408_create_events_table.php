<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('current_year')->nullable();
            $table->foreign('current_year')->references('id')->on('programs');
            $table->string('name');
            $table->string('slug');
            $table->string('title');
            $table->string('detail');
            $table->date('date')->nullable();
            $table->time('hour');
            $table->string('rsvp_mandatory');
            $table->string('rsvp_deadline');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
