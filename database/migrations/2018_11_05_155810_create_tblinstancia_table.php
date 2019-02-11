<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblinstanciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblinstancia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tblmodulo_id')->unsigned()->nullable();
            $table->integer('tbldepartamento_id')->unsigned();
            $table->integer('tblprovincia_id')->unsigned()->nullable();
            $table->integer('tbldistrito_id')->unsigned()->nullable();
            $table->string('nombre');
            $table->string('sigla')->nullable();
            $table->string('tipo',10)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('tblinstancia', function($table) {
            $table->foreign('tblmodulo_id')->references('id')->on('tblmodulo');
            $table->foreign('tbldepartamento_id')->references('id')->on('tbldepartamento');
            // $table->foreign('tblprovincia_id')->references('id')->on('tblprovincia');
            // $table->foreign('tbldistrito_id')->references('id')->on('tbldistrito');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblinstancia');
    }
}
