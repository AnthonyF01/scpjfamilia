<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDpenal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbldpenal', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nombre')->nullable();
            $table->integer('parent')->nullable();//clave foreanea
            $table->boolean('nivel')->default(0);//1->padre, 0->hijo
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dpenal');
    }
}
