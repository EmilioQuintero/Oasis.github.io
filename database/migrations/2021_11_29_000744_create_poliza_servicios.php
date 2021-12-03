<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePolizaServicios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poliza_servicios', function(Blueprint $table){
            $table->id();
            $table->foreignId('servicio_id')->references('id')->on('servicios');
            $table->foreignId('poliza_id')->references('id')->on('polizas');
            $table->tinyInteger('autorizado')->default(0);
            $table->date('fecha_ini')->nullable();
            $table->date('fecha_fin')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('poliza_servicios');
    }
}
