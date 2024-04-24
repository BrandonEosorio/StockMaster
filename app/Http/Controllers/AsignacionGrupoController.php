<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Producto;
use App\Models\Proveedor;
use App\Models\Venta;
use App\Models\Asignacion_grupo;
use Illuminate\Support\Facades\Redirect;

class AsignacionGrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $asignaciones = Asignacion_grupo::orderBy('id', 'DESC')->paginate(5); // Corregido: "Asignacion_grupo" en lugar de "AsignacionGrupo"
        return view('asignacion.index', compact('asignaciones'));
    }

    public function create()
    {
        // Consulta de productos
        $productos = Producto::orderBy('id', 'DESC')
            ->select('productos.id', 'productos.Nombre_Producto')
            ->get();

        // Consulta de proveedores
        $proveedores = Proveedor::orderBy('id', 'DESC')
            ->select('proveedores.id', 'proveedores.Nombre_Proveedor')
            ->get();

        // Consulta de ventas
        $ventas = Venta::orderBy('id', 'DESC')
            ->select('ventas.id', 'ventas.Fecha_de_Venta')
            ->get();

        // Consulta de pedidos
        $pedidos = Pedido::orderBy('id', 'DESC')
            ->select('pedidos.id', 'pedidos.Fecha_de_Pedido')
            ->get();

        return view('asignacion.create', compact('productos', 'proveedores', 'ventas', 'pedidos'));
    }
 
    public function store(Request $request)
    {
        $asignacion = new AsignacionGrupo;
        $asignacion->producto_id = $request->get('producto_id');
        $asignacion->proveedor_id = $request->get('proveedor_id');
        $asignacion->venta_id = $request->get('venta_id');
        $asignacion->pedido_id = $request->get('pedido_id');
        $asignacion->save();

        return redirect()->route('asignacion.index');
    }


    public function show(string $id)
    {
        //
    }

  
    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

   
    public function destroy(string $id)
    {
        //
    }
}
