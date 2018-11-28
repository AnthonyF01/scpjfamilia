<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tblmodulo_id')->unsigned();
            $table->integer('tbldepartamento_id')->unsigned();
            $table->string('name');     // nombre de usuario
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('nombre');
            $table->string('dni');
            $table->date('fchnac');
            $table->string('direccion');
            $table->string('fono');
            $table->string('imagen')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('users', function($table) {
            $table->foreign('tblmodulo_id')->references('id')->on('tblmodulo');
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
        Schema::dropIfExists('users');
    }
}
