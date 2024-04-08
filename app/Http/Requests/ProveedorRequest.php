<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProveedorRequest extends FormRequest
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
			'Nombre_Empresa' => 'required|string',
			'Nit' => 'required|string',
			'Ciudad' => 'required|string',
			'Telefono' => 'required|string',
			'Email' => 'required|string',
			'Producto' => 'required|string',
        ];
    }
    public function messages()
    {
        return[
            'Nombre_Proveedor' => 'Es necesario llenar el campo llamado Nombre_Proveedor para el formulario',
            'Nombre_Empresa' => 'Es necesario llenar el campo llamado Nombre_Empresa para el formulario',
            'Nit' => 'Es necesario llenar el campo llamado Nit para el formulario',
            'Ciudad' => 'Es necesario llenar el campo llamado Ciudad para el formulario',
            'Telefono' => 'Es necesario llenar el campo llamado Telefono para el formulario',
            'Email' => 'Es necesario llenar el campo llamado Email para el formulario',
            'Producto' => 'Es necesario llenar el campo llamado Producto para el formulario',
        ];
    }
}
