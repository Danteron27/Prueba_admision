<?php

namespace App\Http\Requests\Elemento;

use Illuminate\Foundation\Http\FormRequest;

class UpdateElementoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'Id_categorias' => ['required'],
            'Referencias' => ['required', 'string'],
            'Nombres' => ['required', 'string'],
            'Cantidad' => ['required', 'numeric', 'min:0'],
            'Valor' => ['required', 'numeric', 'regex:/^\d+(\.\d{1,2})?$/'],
            'Estado' => ['required', 'in:Activo,Inactivo'],
            'Lugar' => ['required', 'string'],
            'Fecha_Reg' => ['date', 'after_or_equal:'.today()->format('Y-m-d')],
            'Hora_Reg' => ['date_format:H:i:s'],
            'Observaciones' => ['nullable', 'string'],
        ];
    }

    public function messages()
    {
        return[
            'Id_categorias.required' => 'El campo Categorías es obligatorio.',

            'Referencias.required' => 'El campo Referencias es obligatorio.',
            'Referencias.string' => 'El campo Referencias debe ser una cadena de texto.',
            'Referencias.unique' => 'La Referencia ingresada ya existe en la base de datos.',

            'Nombres.required' => 'El campo Nombres es obligatorio.',
            'Nombres.string' => 'El campo Nombres debe ser una cadena de texto.',
            'Nombres.unique' => 'El Nombre ingresado ya existe en la base de datos.',

            'Cantidad.required' => 'El campo Cantidad es obligatorio.',
            'Cantidad.numeric' => 'El campo Cantidad debe ser un número.',
            'Cantidad.min' => 'El campo Cantidad debe ser igual o mayor que cero.',

            'Valor.required' => 'El campo Valor es obligatorio.',
            'Valor.numeric' => 'El campo Valor debe ser un número.',
            'Valor.regex' => 'El campo Valor debe tener un formato válido.',

            'Estado.required' => 'El campo Estado es obligatorio.',
            'Estado.in' => 'El campo Estado debe ser "Activo" o "Inactivo".',

            'Lugar.required' => 'El campo Lugar es obligatorio.',
            'Lugar.string' => 'El campo Lugar debe ser una cadena de texto.',


            'Fecha_Reg.date' => 'El campo Fecha de Registro debe ser una fecha válida.',
            'Fecha_Reg.after_or_equal' => 'El campo Fecha de Registro debe ser una fecha igual o posterior a la fecha actual.',


            'Hora_Reg.date_format' => 'El campo Hora de Registro debe tener un formato de hora válido (por ejemplo, "13:45").',
            'Observaciones.string' => 'El campo Observaciones debe ser una cadena de texto.',
        ];
    }
}
