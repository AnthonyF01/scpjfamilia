<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notification', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('tblmodulo_id')->unsigned()->nullable();
            $table->integer('tbldepartamento_id')->unsigned();
            $table->string('lat',20);
            $table->string('lng',20);
            $table->string('acc',20);
            $table->boolean('state')->default(0);
            $table->string('title')->nullable();
            $table->string('body')->nullable();
            $table->integer('worker_id')->unsigned()->nullable();
            
            $table->timestamps();
        });

        Schema::table('notification', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('worker_id')->references('id')->on('users');
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
        Schema::dropIfExists('notification');
    }
}
