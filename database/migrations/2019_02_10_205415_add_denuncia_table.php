<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDenunciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('denuncia', function (Blueprint $table) {
            $table->integer('institucion')->unsigned()->nullable();
            $table->integer('tbldenuncia_id')->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('denuncia', function (Blueprint $table) {
            $table->foreign('tbldenuncia_id')->references('id')->on('tbldenuncia');
        });
    }
}
