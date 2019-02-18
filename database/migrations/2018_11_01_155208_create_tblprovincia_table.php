<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblprovinciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblprovincia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tbldepartamento_id')->unsigned();
            $table->string('ubigeo');
            $table->string('nombre');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('tblprovincia', function($table) {
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
        Schema::dropIfExists('tblprovincia');
    }
}
