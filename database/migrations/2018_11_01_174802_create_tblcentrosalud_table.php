<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblcentrosaludTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblcentrosalud', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tblmodulo_id')->unsigned();
            $table->integer('tbldepartamento_id')->unsigned();
            $table->string('nombre');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('tblcentrosalud', function($table) {
            $table->foreign('tblmodulo_id')->references('id')->on('tblmodulo');
            $table->foreign('tbldepartamento_id')->references('id')->on('tbldepartamento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblcentrosalud');
    }
}
