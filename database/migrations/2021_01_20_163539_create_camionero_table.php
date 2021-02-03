<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCamioneroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camionero', function (Blueprint $table) {
            $table->id();
            $table->string('foto');
            $table->string('nombre', 30);
            $table->string('telefono', 15);
            $table->decimal('salario', 8,2);
            $table->string('poblacion', 30);
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('camionero');
    }
}
