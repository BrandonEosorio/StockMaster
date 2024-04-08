<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VentaRequest extends FormRequest
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
			'ID_Cliente' => 'required|string',
			'Nombre_Cliente' => 'required|string',
			'Fecha_de_Venta' => 'required',
			'Cantidad' => 'required',
			'Precio' => 'required',
			'Total' => 'required',
        ];
    }
    public function messages()
    {
        return[
            'ID_Cliente' => 'Es necesario llenar el ID para el registro de ventas',
            'Nombre_Cliente' => 'Es necesario llenar el Nombre Cliente para el registro de ventas',
            'Fecha_de_Venta' => 'Es necesario llenar la Fecha de Venta para el registro de ventas',
            'Cantidad' => 'Es necesario llenar la cantidad para el registro de ventas',
            'Precio' => 'Es necesario llenar el Precio para el registro de ventas',
            'Total' => 'Es necesario llenar el Total para el registro de ventas',
        ];
    }
}
