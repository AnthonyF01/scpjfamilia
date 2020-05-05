<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblcomisariaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblcomisaria', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tblmodulo_id')->unsigned()->nullable();
            $table->integer('tbldepartamento_id')->unsigned();
            $table->integer('tbldistrito_id')->unsigned();
            $table->string('nombre');
            $table->string('latitud')->nullable();
            $table->string('longitud')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('tblcomisaria', function($table) {
            $table->foreign('tblmodulo_id')->references('id')->on('tblmodulo');
            $table->foreign('tbldepartamento_id')->references('id')->on('tbldepartamento')
            $table->foreign('tbldistrito_id')->references('id')->on('tbldistrito');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblcomisaria');
    }
}
