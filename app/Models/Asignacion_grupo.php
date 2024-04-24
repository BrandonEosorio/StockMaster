<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asignacion_grupo extends Model
{
    protected $table = 'asignacion_grupos';

    public function producto()
    {
        return $this->belongsTo('App\Models\Producto', 'producto_id');
    }

    public function proveedor()
    {
        return $this->belongsTo('App\Models\Proveedor', 'proveedor_id');
    }

    public function venta()
    {
        return $this->belongsTo('App\Models\Venta', 'venta_id');
    }

    public function pedido()
    {
        return $this->belongsTo('App\Models\Pedido', 'pedido_id');
    }

    // Relación uno a muchos inversa
    public function grupo()
{
    return $this->belongsTo('App\Models\Grupo', 'grupo_id', 'id');
}

}
