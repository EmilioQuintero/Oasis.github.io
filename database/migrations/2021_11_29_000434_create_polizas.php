<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePolizas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('polizas', function(Blueprint $table){
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('paquete_id')->references('id')->on('paquetes');
            $table->date('fechaFinal');
            $table->string('marca');
            $table->string('modelo');
            $table->string('año');
            $table->string('placa');
            $table->string('numSerie');
            $table->tinyInteger('autorizado');
            $table->text('imagenes');
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
        Schema::dropIfExists('polizas');
    }
}
