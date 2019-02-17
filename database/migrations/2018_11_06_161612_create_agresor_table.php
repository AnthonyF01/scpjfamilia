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
            $table->integer('tbldocumento_id')->unsigned();
            $table->string('nro_doc');
            $table->string('sexo',20);
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
