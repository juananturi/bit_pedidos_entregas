<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) { 
            $table->id(); 
            $table->string('nombre'); 
            $table->string('apellido'); 
            $table->string('cedula'); 
            $table->string('direccion'); 
            $table->string('barrio'); 
            $table->boolean('activo'); 
            $table->date('fecha_nacimiento'); 
            $table->string('telefono'); 
            $table->text('descripcion');  
            $table->string('codigo');  
            $table->unsignedBigInteger('departamento_id');  
            $table->unsignedBigInteger('municipio_id');  
            $table->foreign('departamento_id')->references('id')->on('departamentos'); 
            $table->foreign('municipio_id')->references('id')->on('municipios'); 
 
 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
