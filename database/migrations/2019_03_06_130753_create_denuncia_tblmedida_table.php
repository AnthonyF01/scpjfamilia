<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDenunciaTblmedidaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('denuncia_tblmedida', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('denuncia_id')->unsigned();
            $table->integer('tblmedida_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('denuncia_tblmedida', function($table) {
            $table->foreign('denuncia_id')->references('id')->on('denuncia');
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
        Schema::dropIfExists('denuncia_tblmedida');
    }
}
