<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add1DenunciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('denuncia', function (Blueprint $table) {
            $table->string('medida_file')->change();
            $table->string('registro_file')->change();
            $table->string('oficioejecucion',50)->nullable();
            $table->date('foficioejecucion')->nullable();
            $table->string('oficioejecucion_file')->nullable();
            $table->integer('tblmedida_id')->unsigned()->nullable();
            $table->date('fmedida')->nullable();
            $table->date('fjip')->nullable();

            $table->integer('tbldpenal_id')->unsigned()->nullable();

            //remision
            $table->integer('apelacion_r')->unsigned()->nullable();
            $table->string('oficio_r')->nullable();
            $table->date('evaluacion_r')->nullable();
            $table->date('retorno_r')->nullable();
            // etapa 1
            $table->integer('apelacione1_j')->unsigned()->nullable();
            $table->string('oficioe1_j')->nullable();
            $table->date('evaluacione1_j')->nullable();
            $table->date('retornoe1_j')->nullable();
            // etapa 2
            $table->integer('apelacione2_j')->unsigned()->nullable();
            $table->string('oficioe2_j')->nullable();
            $table->date('evaluacione2_j')->nullable();
            $table->date('retornoe2_j')->nullable();
            //casacion
            $table->integer('apelacionc_j')->unsigned()->nullable();
            $table->string('oficioc_j')->nullable();
            $table->date('evaluacionc_j')->nullable();
            $table->date('retornoc_j')->nullable();

            //remision
            $table->date('resolucion_r')->nullable();
            $table->integer('apelacionc_r')->unsigned()->nullable();
            $table->string('oficioc_r')->nullable();
            $table->date('evaluacionc_r')->nullable();
            $table->date('retornoc_r')->nullable();
            $table->date('resolucionc_r')->nullable();
            //fase 3 etapa 1
            $table->date('resolucione1_j')->nullable();
            $table->date('resolucionc_j')->nullable();
            //fase 3 etapa 2
            $table->date('resolucione2_j')->nullable();
            $table->integer('apelacionc2_j')->unsigned()->nullable();
            $table->string('oficioc2_j')->nullable();
            $table->date('evaluacionc2_j')->nullable();
            $table->date('retornoc2_j')->nullable();
            $table->date('resolucionc2_j')->nullable();

        });
        Schema::table('denuncia', function (Blueprint $table) {
            $table->foreign('tbldpenal_id')->references('id')->on('tbldpenal');
            $table->foreign('tblmedida_id')->references('id')->on('tblmedida');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
