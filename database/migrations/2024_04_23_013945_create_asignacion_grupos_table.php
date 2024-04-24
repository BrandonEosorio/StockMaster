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
            Schema::create('asignacion_grupos', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('producto_id'); // Clave foránea para el producto
                $table->unsignedBigInteger('proveedor_id')->nullable(); // Clave foránea para el proveedor
                $table->unsignedBigInteger('venta_id')->nullable(); // Clave foránea para la venta
                $table->unsignedBigInteger('pedido_id')->nullable(); // Clave foránea para el pedido
                $table->timestamps();
                
                // Definir las claves foráneas
                $table->foreign('producto_id')->references('id')->on('productos')->onDelete('set null');
                $table->foreign('proveedor_id')->references('id')->on('proveedors')->onDelete('set null');
                $table->foreign('venta_id')->references('id')->on('ventas')->onDelete('set null');
                $table->foreign('pedido_id')->references('id')->on('pedidos')->onDelete('set null');
            });
        }
        

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asignacion_grupos');
    }
};
