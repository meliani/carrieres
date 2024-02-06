<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->unsignedInteger('level')->nullable();
            $table->foreign('level')->references('id')->on('programs');
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
