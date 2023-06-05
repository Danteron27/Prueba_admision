<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'Nombre' => ['required', 'string'],
            'usuario' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];
    }

    public function messages()
    {
        return[
            'Nombre.required' => 'El campo Nombre no debe estar vacio',
            'Nombre.string' => 'El nombre no es valido',

            'usuario.required' => 'El campo Usuario no debe estar vacio',
            'usuario.string' => 'El usuario no es valido',

            'email.required' => 'El campo email no debe estar vacio',
            'email.email' => 'El email introducido no es valido',
            'email.unique' => 'El email ya se encuentra registrado',

            'password.required' => 'El campo password no debe estar vacio',
            'password.string' => 'La contraseña ingresada no es valida',
            'password.min' => 'La contraseña debe contener minimo 8 caracteres',
            'password.confirmed' => 'Las contraseñas no coinciden',
        ];
    }
}
