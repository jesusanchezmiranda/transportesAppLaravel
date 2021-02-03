<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaqueteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paquete', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idcamionero')->unsigned();
            $table->string('descripcion')->nullable();
            $table->decimal('precio', 8,2)->nullable(); //para poner precios*** 
            $table->timestamps(); 
            $table->foreign('idcamionero')->references('id')->on('camionero'); //para definir la clave foranea
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paquete');
    }
}
