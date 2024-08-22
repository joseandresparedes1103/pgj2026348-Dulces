<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComisionesTable extends Migration
{
    public function up()
    {
        Schema::create('comisiones', function (Blueprint $table) {
            $table->id('id_comision');
            $table->unsignedBigInteger('id_empleado');
            $table->unsignedBigInteger('id_inmueble');
            $table->integer('precio_comi');
            $table->timestamps();

            $table->foreign('id_empleado')->references('id_empleado')->on('empleados')->onDelete('cascade');
            $table->foreign('id_inmueble')->references('id_inmueble')->on('inmuebles')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('comisiones');
    }
}
