<?php

use App\Http\Controllers\PedidoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\VentaController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('productos', ProductoController::class);
Route::resource('proveedors', ProveedorController::class);
Route::resource('pedidos', PedidoController::class);
Route::resource('ventas', VentaController::class);
Route::resource('asignacion', 'App\http\controllers\AsignacionGrupoController');
Route::get('imprimirProductos','App\http\controllers\PdfController@imprimirProducto')->name('imprimirProductos');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
