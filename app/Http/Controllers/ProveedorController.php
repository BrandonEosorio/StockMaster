<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use App\Http\Requests\ProveedorRequest;

/**
 * Class ProveedorController
 * @package App\Http\Controllers
 */
class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proveedors = Proveedor::paginate();

        return view('proveedor.index', compact('proveedors'))
            ->with('i', (request()->input('page', 1) - 1) * $proveedors->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $proveedor = new Proveedor();
        return view('proveedor.create', compact('proveedor'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProveedorRequest $request)
    {
        Proveedor::create($request->validated());

        return redirect()->route('proveedors.index')
            ->with('success', 'Proveedor created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $proveedor = Proveedor::find($id);

        return view('proveedor.show', compact('proveedor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $proveedor = Proveedor::find($id);

        return view('proveedor.edit', compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProveedorRequest $request, Proveedor $proveedor)
    {
        $proveedor->update($request->validated());

        return redirect()->route('proveedors.index')
            ->with('success', 'Proveedor updated successfully');
    }

    public function destroy($id)
    {
        Proveedor::find($id)->delete();

        return redirect()->route('proveedors.index')
            ->with('success', 'Proveedor deleted successfully');
    }
}
