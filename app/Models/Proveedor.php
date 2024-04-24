<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedor
 *
 * @property $id
 * @property $Nombre_Proveedor
 * @property $Nombre_Empresa
 * @property $Nit
 * @property $Ciudad
 * @property $Telefono
 * @property $Email
 * @property $Producto
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proveedor extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre_Proveedor', 'Nombre_Empresa', 'Nit', 'Ciudad', 'Telefono', 'Email', 'Producto'];

    public function asignacionGrupos()
    {
        return $this->hasMany('App\Models\AsignacionGrupo', 'proveedor_id');
    }

}
