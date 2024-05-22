<?php

use App\Http\Controllers\PedidoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\ClienteController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('productos', ProductoController::class);
Route::resource('proveedors', ProveedorController::class);
Route::resource('pedidos', PedidoController::class);
Route::resource('ventas', VentaController::class);
Route::resource('clientes', ClienteController::class);

Route::get('imprimirProductos','App\http\controllers\PdfController@imprimirProducto')->name('imprimirProductos');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('ventas/buscarCliente', [VentaController::class, 'buscarCliente'])->name('ventas.buscarCliente');
Route::get('ventas/buscarProducto', [VentaController::class, 'buscarProducto'])->name('ventas.buscarProducto');

Route::get('/', [App\Http\Controllers\CartController::class, 'shop'])->name('shop');
Route::get('/carrito', [App\Http\Controllers\CarritoController::class, 'cart'])->name('cart.index');
Route::post('/add', [App\Http\Controllers\CartController::class, 'add'])->name('cart.store');
Route::post('/update', [App\Http\Controllers\CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [App\Http\Controllers\CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [App\Http\Controllers\CartController::class, 'clear'])->name('cart.clear');