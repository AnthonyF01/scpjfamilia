<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbldistritoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbldistrito', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tblprovincia_id')->unsigned();
            $table->string('ubigeo');
            $table->string('nombre');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('tbldistrito', function($table) {
            $table->foreign('tblprovincia_id')->references('id')->on('tblprovincia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbldistrito');
    }
}
