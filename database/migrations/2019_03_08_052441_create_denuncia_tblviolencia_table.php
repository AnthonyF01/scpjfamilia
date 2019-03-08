<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDenunciaTblviolenciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('denuncia_tblviolencia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('denuncia_id')->unsigned();
            $table->integer('tblviolencia_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('denuncia_tblviolencia', function($table) {
            $table->foreign('denuncia_id')->references('id')->on('denuncia');
            $table->foreign('tblviolencia_id')->references('id')->on('tblviolencia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('denuncia_tblviolencia');
    }
}
