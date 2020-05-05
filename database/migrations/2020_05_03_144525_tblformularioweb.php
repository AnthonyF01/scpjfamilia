<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tblformularioweb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tblformularioweb', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable()->unsigned();
            
            $table->integer('tbldepartamento_id_vic')->unsigned();
            $table->integer('tblprovincia_id_vic')->unsigned();
            $table->integer('tbldistrito_id_vic')->unsigned();
            $table->string('nombre1_vic');
            $table->string('nombre2_vic');
            $table->string('apellido1_vic');
            $table->string('apellido2_vic');
            $table->integer('tbldocumento_id_vic')->unsigned();
            $table->string('nro_doc_vic');
            $table->integer('edad_vic');
            $table->integer('hijos_vic');
            $table->integer('tbltipo_id_vic')->unsigned();
            $table->string('telefono_vic')->nullable();
            $table->string('email_vic')->nullable();
            $table->string('direccion_vic')->nullable();
           
            $table->string('nombre1_agre');
            $table->string('nombre2_agre');
            $table->string('apellido1_agre');
            $table->string('apellido2_agre');
            $table->integer('tbldocumento_id_agre')->unsigned();
            $table->string('nro_doc_agre');
            $table->string('sexo_agre',20);
            $table->string('telefono_agre')->nullable();
            $table->string('direccion_agre')->nullable();
            $table->integer('tbldepartamento_id_agre')->unsigned();
            $table->integer('tblprovincia_id_agre')->unsigned();
            $table->integer('tbldistrito_id_agre')->unsigned();

            $table->integer('tblparentesco_id')->unsigned();
            $table->integer('tblcomisaria_id')->unsigned()->nullable();
            $table->string('estado',2);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('tblformularioweb', function($table) {
            $table->foreign('tbldepartamento_id_vic')->references('id')->on('tbldepartamento');
            $table->foreign('tblprovincia_id_vic')->references('id')->on('tblprovincia');
            $table->foreign('tbldistrito_id_vic')->references('id')->on('tbldistrito');
            $table->foreign('tbldocumento_id_vic')->references('id')->on('tbldocumento');
            $table->foreign('tbltipo_id_vic')->references('id')->on('tbltipo');
            $table->foreign('tbldepartamento_id_agre')->references('id')->on('tbldepartamento');
            $table->foreign('tblprovincia_id_agre')->references('id')->on('tblprovincia');
            $table->foreign('tbldistrito_id_agre')->references('id')->on('tbldistrito');
            $table->foreign('tbldocumento_id_agre')->references('id')->on('tbldocumento');
            $table->foreign('tblcomisaria_id')->references('id')->on('tblcomisaria');
            $table->foreign('tblparentesco_id')->references('id')->on('tblparentesco');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('tblformularioweb');
    }
}
