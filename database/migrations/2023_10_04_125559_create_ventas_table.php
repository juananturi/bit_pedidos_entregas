<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('pedido_id');
            $table->date('fecha_registro');
            $table->decimal('total', 10, 2);
            // Agrega otros campos según tus necesidades
            $table->timestamps();
    
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('pedido_id')->references('id')->on('pedidos');

        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas');
    }
};
