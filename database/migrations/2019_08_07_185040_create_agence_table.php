<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agences', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('region');
            $table->string('ville');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('phone');
            $table->string('login'); 
            $table->string('password');
            $table->integer('structure_id')->unsigned();
            $table->foreign('structure_id')
                ->references('id')
                ->on('structures')
                ->onDelete('cascade')
                ->onUpdate('cascade'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agences');
    }
}
