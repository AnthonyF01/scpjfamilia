<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeviceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('device', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('client_id')->unsigned();
            $table->string('token_device')->unique();
            $table->boolean('sesion')->default(1); // si el usuario tiene una sesion activa en el dispositivo(token)
            $table->timestamps();
        });

        Schema::table('device', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('client_id')->references('id')->on('oauth_clients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('device');
    }
}
