<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDenunciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('denuncia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tblcomisaria_id')->unsigned()->nullable();
            $table->integer('tblfiscalia_id')->unsigned()->nullable(); // por agregar
            $table->string('oficio',50)->nullable();
            $table->date('fdenuncia')->nullable();
            $table->date('fformalizacion')->nullable();
            $table->string('expediente',50)->nullable();
            $table->string('calificacion',50)->nullable();
            $table->time('hora')->nullable();
            $table->date('faudiencia')->nullable();             // fase 2
            $table->string('remitido',150)->nullable();         // fase 2
            $table->string('oficioremitido',50)->nullable();    // fase 2
            $table->date('fremision')->nullable();
            $table->boolean('ministerio')->nullable()->default(0);
            $table->integer('tblinstancia_id')->unsigned()->nullable();
            $table->boolean('asistencialegal')->nullable()->default(0);     // cem
            $table->boolean('psicologia')->nullable()->default(0);          // cem

            $table->integer('dependenciad')->unsigned()->nullable();
            $table->string('expediented',50)->nullable();       // fase 3   
            $table->string('remitidod',150)->nullable();         // fase 3
            $table->string('oficioremitidod',50)->nullable();    // fase 3   
            $table->date('fremisiond')->nullable();              // fase 3

            $table->integer('jip')->unsigned()->nullable();
            $table->integer('juzgamiento')->unsigned()->nullable();
            $table->string('remitidoj',150)->nullable();         // fase 4
            $table->string('oficioremitidoj',50)->nullable();    // fase 4   
            $table->date('fremisionj')->nullable();              // fase 4

            $table->string('observacion',500)->nullable();
            $table->integer('tblmodulo_id')->unsigned();
            $table->string('medida_file',50)->nullable();
            $table->string('registro_file',50)->nullable();
            $table->integer('device')->nullable()->default(0);
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('denuncia', function($table) {
            $table->foreign('tblcomisaria_id')->references('id')->on('tblcomisaria');
            $table->foreign('tblfiscalia_id')->references('id')->on('tblfiscalia');
            $table->foreign('tblmodulo_id')->references('id')->on('tblmodulo');
            $table->foreign('tblinstancia_id')->references('id')->on('tblinstancia');
            $table->foreign('dependenciad')->references('id')->on('tblinstancia');
            $table->foreign('jip')->references('id')->on('tblinstancia');
            $table->foreign('juzgamiento')->references('id')->on('tblinstancia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('denuncia');
    }
}
