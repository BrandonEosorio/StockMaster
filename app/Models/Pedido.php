<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pedido
 *
 * @property $id
 * @property $Nombre_Proveedor
 * @property $Fecha_de_Pedido
 * @property $Producto_pedido
 * @property $Cantidad_pedida
 * @property $estado
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pedido extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre_Proveedor', 'Fecha_de_Pedido', 'Producto_pedido', 'Cantidad_pedida', 'estado'];

    public function asignacionGrupos()
    {
        return $this->hasMany('App\Models\AsignacionGrupo', 'pedido_id');
    }

}
