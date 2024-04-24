<?php

namespace App\Http\Controllers;

use pdf;
use Illuminate\Http\Request;
use App\Models\Producto;

class PdfController extends Controller
{
    public function imprimirProducto(Request $request) 
    { $productos=Producto::orderBy('id','ASC')->get();
        $pdf = \PDF::loadView('pdf.productosPDF',['productos' => $productos ]); 
        $pdf->setPaper('carta', 'A4'); 
        
        return $pdf->stream(); 
    
    }
}
