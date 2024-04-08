<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
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
			'Nombre_Producto' => 'required|string',
			'Descripcion' => 'required|string',
			'Precio' => 'required',
			'Existencias' => 'required',
        ];
    }
    public function messages()
    {
        return[
            'Nombre_Producto' => 'Es necesario llenar el parametro Nombre_Producto para el cliente',
            'Descripcion' => 'Es necesario llenar el campo llamado Descripcion para el conocimiento del cliente',
            'Precio' => 'Es necesario llenar el parametro llamado Precio para que el cliente sepa cuanto cuesta',
            'Existencias' => 'Es necesario llenar el campo llamado Existencias para que el cliente sepa cuantos hay disponibles',
        ];
    }
}
