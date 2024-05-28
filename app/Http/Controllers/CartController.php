<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function shop()
    {
        $products = Producto::all();
        return view('tienda.shop')->withTitle('E-COMMERCE STORE | SHOP')->with(['products' => $products]);
    }

    public function add(Request $request)
    {
        // Validar la solicitud para asegurarse de que los campos necesarios están presentes
        $request->validate([
            'id' => 'required',
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required|numeric',
            'existencias' => 'required|integer',
        ]);

        // Agregar el producto al carrito
        \Cart::add(array(
            'id' => $request->id,
            'name' => $request->nombre, // Nombre del producto
            'price' => $request->precio, // Precio del producto
            'quantity' => 1, // Cantidad inicial
            'attributes' => array(
                'descripcion' => $request->descripcion, // Descripción del producto
                'existencias' => $request->existencias, // Existencias del producto
            )
        ));

        return redirect()->route('cart.index')->with('success_msg', 'Producto Agregado a su Carrito!');
    }

    public function carrito()
    {
        $cartCollection = \Cart::getContent();
        return view('tienda.cart')->withTitle('StockMaster')->with(['cartCollection' => $cartCollection]);
    }

    public function remove(Request $request)
    {
        \Cart::remove($request->id);
        return redirect()->route('cart.index')->with('success_msg', 'Producto Removido!');
    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'quantity' => 'required|integer',
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required|numeric',
            'existencias' => 'required|integer',
        ]);

        \Cart::update($request->id, array(
            'quantity' => array(
                'relative' => false,
                'value' => $request->quantity,
            ),
            'attributes' => array(
                'name' => $request->nombre,
                'descripcion' => $request->descripcion,
                'price' => $request->precio,
                'existencias' => $request->existencias,
            )
        ));

        return redirect()->route('cart.index')->with('success_msg', 'Carrito Actualizado!');
    }

    public function clear()
    {
        \Cart::clear();
        return redirect()->route('cart.index')->with('success_msg', 'Carrito esta vacio!');
    }
}
