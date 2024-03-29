<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSillasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sillas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('numeroSilla')->nullable();
            $table->integer('mesaCorresponde')->nullable();
            $table->Integer('idMesa')->unsigned();
            $table->foreign('idMesa')->references('id')->on('mesas')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sillas');
    }
}
