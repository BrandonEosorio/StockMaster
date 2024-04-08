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
        Schema::create('proveedors', function (Blueprint $table) {
            $table->id();
            $table->String ('Nombre_Proveedor');
            $table->String ('Nombre_Empresa');
            $table->string ('Nit');
            $table->string ('Ciudad');
            $table->string ('Telefono');
            $table->string ('Email');
            $table->string ('Producto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedors');
    }
};
