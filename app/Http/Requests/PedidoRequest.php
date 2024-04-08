<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PedidoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'Nombre_Proveedor' => 'required|string',
			'Fecha_de_Pedido' => 'required',
			'Producto_pedido' => 'required|string',
			'Cantidad_pedida' => 'required',
			'estado' => 'required',
        ];
    }
    public function messages()
    {
        return[
            'Nombre_Proveedor' => 'Es necesario saber el Nombre del Proveedor para el registro de ventas',
            'Fecha_de_Pedido' => 'Es necesario saber la Fecha en la que se realizo el Pedido',
            'Producto_pedido' => 'Es necesario saber el nombre del Producto pedido para saber que se pidio',
            'Cantidad_pedida' => 'Es necesario saber la Cantidad que se pedio del producto',
            'estado' => 'Es necesario saber el estado en el que el pedido se encuentra',
        ];
    }
}
