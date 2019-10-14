<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgresorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agresor', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tbldepartamento_id')->unsigned();
            $table->integer('tblprovincia_id')->unsigned();
            $table->integer('tbldistrito_id')->unsigned();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('nombre1');
            $table->string('nombre2');
            $table->string('nombre3');
            $table->string('apellido1');
            $table->string('apellido2');
            $table->integer('tbldocumento_id')->unsigned();
            $table->string('nro_doc');
            $table->string('sexo',20);
            $table->string('telefono')->nullable();
            $table->string('email')->nullable();
            $table->string('direccion')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('agresor', function($table) {
            $table->foreign('tbldepartamento_id')->references('id')->on('tbldepartamento');
            $table->foreign('tblprovincia_id')->references('id')->on('tblprovincia');
            $table->foreign('tbldistrito_id')->references('id')->on('tbldistrito');
            $table->foreign('tbldocumento_id')->references('id')->on('tbldocumento');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agresor');
    }
}
