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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->string ('Nombre_Cliente');
            $table->unsignedBigInteger ('ID_Cliente');
            $table->date ('Fecha_de_Venta');
            $table->integer ('Cantidad');
            $table->double ('Precio', 8, 2);
            $table->double ('Total', 8, 2);
            $table->foreign('ID_Cliente')->references('id')->on('clientes')->onDelete('cascade');
            $table->timestamps();
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
