<?php

namespace App\Http\Controllers;
use App\Models\Producto;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function shop()
 {
 $products = Producto::all();
 //dd($products);
 return view('tienda.shop')->withTitle('E-COMMERCE STORE | SHOP')->with(['products' => $products]);
 }
 public function add(Request $request){

 \Cart::add(array(
 'id' => $request->id,
 'Nombre_Producto' => $request->nombre,
 'Descripcion' => $request->descripcion,
 'Precio' => $request->precio,
 'Existencias' => $request->existencias,

 ));
    return redirect()->route('cart.index')->with('success_msg', 'Producto Agregado a sú Carrito!');
 
    }
    public function carrito() {
    $cartCollection = \Cart::getContent();
        //dd($cartCollection);
    return view('tienda.cart')->withTitle('E-COMMERCE STORE | CART')->with(['cartCollection' => $cartCollection]);;
    }

    public function remove(Request $request){
    \Cart::remove($request->id);
    return redirect()->route('cart.index')->with('success_msg', 'Producto Removido!');
    }

    public function update(Request $request){
        \Cart::update($request->id, array(
            'quantity' => array(
                'relative' => false,
                'value' => $request->quantity
            ),
            'attributes' => array(
                'Nombre_Producto' => $request->nombre,
                'Descripcion' => $request->descripcion,
                'Precio' => $request->precio,
                'Existencias' => $request->existencias,
                )
            ));
            return redirect()->route('cart.index')->with('success_msg', 'Carrito Actualizado!');
        }
        public function clear(){
            \Cart::clear();
            return redirect()->route('cart.index')->with('success_msg', 'Carrito esta vacio!');
        }
    }
