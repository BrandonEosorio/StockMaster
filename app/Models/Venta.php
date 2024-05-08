<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Venta
 *
 * @property $id
 * @property $Nombre_Cliente
 * @property $ID_Cliente
 * @property $Fecha_de_Venta
 * @property $Cantidad
 * @property $Precio
 * @property $Total
 * @property $created_at
 * @property $updated_at
 *
 * @property Cliente $cliente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Venta extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['Nombre_Cliente', 'ID_Cliente', 'Fecha_de_Venta', 'Cantidad', 'Precio', 'Total'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cliente()
    {
        return $this->belongsTo(\App\Models\Cliente::class, 'ID_Cliente', 'id');
    }
    
}
