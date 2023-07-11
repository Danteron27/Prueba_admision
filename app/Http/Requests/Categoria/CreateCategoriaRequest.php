<?php

namespace App\Http\Requests\Categoria;

use Illuminate\Foundation\Http\FormRequest;

class CreateCategoriaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'Codigo' => ['required', 'string', 'unique:categorias,Codigo'],
            'Nombre' => ['required', 'string'],
            'Descripcion' => ['required', 'string'],
            'Observacion' => ['nullable', 'string'],
        ];
    }

    public function messages()
    {
        return[

            'Codigo.required' => 'El campo Codigo no debe estar vacio',
            'Codigo.string' => 'El Codigo no es valido',
            'Codigo.unique' => 'El Codigo ya se encuentra registrado',

            'Nombre.required' => 'El campo Nombre no debe estar vacio',
            'Nombre.string' => 'El Nombre no es valido',

            'Descripcion.required' => 'El campo Descripcion no debe estar vacio',
            'Descripcion.string' => 'El Descripcion no es valido',

            'Observacion.required' => 'El campo Observacion no debe estar vacio',
            'Observacion.string' => 'El Observacion no es valido',
        ];
    }
}
