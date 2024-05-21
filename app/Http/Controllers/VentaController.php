<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\Cliente;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\VentaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    
        $ventas = Venta::join('clientes', 'ventas.ID_Cliente', '=', 'clientes.id')
        ->select('clientes.nombre_cliente as nombre_cliente', 'ventas.*')
        ->get();

   
    
    return view('venta.index',compact('ventas'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $venta = new Venta();
        $clientes = Cliente::select('Nombre_Cliente','id') ->get();

        return view('venta.create', compact('venta','clientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VentaRequest $request): RedirectResponse
    {
        Venta::create($request->validated());

        return Redirect::route('ventas.index')
            ->with('success', 'Venta created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $venta = Venta::find($id);

        return view('venta.show', compact('venta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $venta = Venta::find($id);

        return view('venta.edit', compact('venta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VentaRequest $request, Venta $venta): RedirectResponse
    {
        $venta->update($request->validated());

        return Redirect::route('ventas.index')
            ->with('success', 'Venta updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Venta::find($id)->delete();

        return Redirect::route('ventas.index')
            ->with('success', 'Venta deleted successfully');
    }

public function buscarCedula(Request $request)
{
    $cedula = $request->get('cedula');
    $venta = Venta::where('cedula', $cedula)->first();

    if ($venta) {
        return response()->json([
            'id' => $venta->id,
            'nombre_cliente' => $venta->nombre_cliente,
            // Otros campos de la venta que desees retornar
        ]);
    } else {
        $mensajeError = "La cédula no existe en la base de datos";
        return response()->json(['error' => $mensajeError], 404);
    }
}
}