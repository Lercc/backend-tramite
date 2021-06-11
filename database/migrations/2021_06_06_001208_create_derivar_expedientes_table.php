<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDerivarExpedientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('derivar_expedientes', function (Blueprint $table) {
            $table->id();  
            $table->integer('idoficina')->unsigned();
            $table->foreign('idoficina')->references('id')->on('oficinas');            
            $table->integer('idexpediente')->unsigned();
            $table->foreign('idexpediente')->references('id')->on('expedientes');
            $table->string('estado',45);
            $table->string('prioridad',45)->nullable();
            $table->string('observacion',45);
            $table->dateTime('fecha_derivado'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('derivar_expedientes');
    }
}
