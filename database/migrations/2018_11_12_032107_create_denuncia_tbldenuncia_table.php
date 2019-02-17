<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDenunciaTbldenunciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('denuncia_tbldenuncia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('denuncia_id')->unsigned();
            $table->integer('tbldenuncia_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('denuncia_tbldenuncia', function($table) {
            $table->foreign('denuncia_id')->references('id')->on('denuncia');
            $table->foreign('tbldenuncia_id')->references('id')->on('tbldenuncia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('denuncia_tbldenuncia');
    }
}
