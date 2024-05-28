<?php

// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\ClienteController;

Route::get('/', [CartController::class, 'shop'])->name('shop');

Route::middleware('auth')->group(function () {
    Route::resource('productos', ProductoController::class);
    Route::resource('proveedors', ProveedorController::class);
    Route::resource('pedidos', PedidoController::class);
    Route::resource('ventas', VentaController::class);
    Route::resource('clientes', ClienteController::class);

    Route::get('imprimirProductos', 'App\http\controllers\PdfController@imprimirProducto')->name('imprimirProductos');

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::get('ventas/buscarCliente', [VentaController::class, 'buscarCliente'])->name('ventas.buscarCliente');
    Route::get('ventas/buscarProducto', [VentaController::class, 'buscarProducto'])->name('ventas.buscarProducto');

    Route::get('/carrito', [CartController::class, 'cart'])->name('cart.index');
    Route::post('/add', [CartController::class, 'add'])->name('cart.store');
    Route::post('/update', [CartController::class, 'update'])->name('cart.update');
    Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
    Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');
});

Auth::routes();
