<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Venta
 *
 * @property $id
 * @property $ID_Cliente
 * @property $Nombre_Cliente
 * @property $Fecha_de_Venta
 * @property $Cantidad
 * @property $Precio
 * @property $Total
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Venta extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['ID_Cliente', 'Nombre_Cliente', 'Fecha_de_Venta', 'Cantidad', 'Precio', 'Total'];

    public function asignacionGrupos()
    {
        return $this->hasMany('App\Models\AsignacionGrupo', 'venta_id');
    }

}
