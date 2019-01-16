<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDenunciaAgresorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('denuncia_agresor', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('denuncia_id')->unsigned();
            $table->integer('agresor_id')->unsigned();
            $table->integer('tblparentesco_id')->unsigned()->default(9);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('denuncia_agresor', function($table) {
            $table->foreign('denuncia_id')->references('id')->on('denuncia');
            $table->foreign('agresor_id')->references('id')->on('agresor');
            $table->foreign('tblparentesco_id')->references('id')->on('tblparentesco');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('denuncia_agresor');
    }
}
