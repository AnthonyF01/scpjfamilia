<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDenunciaVictimaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('denuncia_victima', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('denuncia_id')->unsigned();
            $table->integer('victima_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('denuncia_victima', function($table) {
            $table->foreign('denuncia_id')->references('id')->on('denuncia');
            $table->foreign('victima_id')->references('id')->on('victima');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('denuncia_victima');
    }
}
