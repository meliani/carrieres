<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('options', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cycle_id')->unsigned();
            $table->string('titre');
            $table->timestamps();
            
          $table->foreign('cycle_id')
                ->references('id')
                ->on('cycles')
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
        Schema::table('options', function(Blueprint $table){
            $table->dropForeign('options_cycle_id_foreign');
        });
        
        Schema::dropIfExists('options');
    }
}
