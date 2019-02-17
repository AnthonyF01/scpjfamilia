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
        });
        Schema::table('denuncia', function (Blueprint $table) {
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
