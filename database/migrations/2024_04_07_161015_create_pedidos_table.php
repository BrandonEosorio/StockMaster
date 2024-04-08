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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->String ('Nombre_Proveedor');
            $table->date('Fecha_de_Pedido');
            $table->string('Producto_pedido');
            $table->integer('Cantidad_pedida');
            $table->enum('estado', ['Pendiente', 'Enviado', 'Recibido'])->default('Pendiente');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
