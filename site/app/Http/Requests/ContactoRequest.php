<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContactoRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'in_email' => 'required|email|unique:bs_contacto,email',
            'in_telefono' => 'required|between:7,9|unique:bs_contacto,phone',
            'in_nombre' => 'required|string',
            'in_apellidos' => 'required|string',
            'in_distrito' => 'required|exists:distrito,codigo_distrito',
            'in_turno' => 'required|exists:bs_turno_atencion,bs_turno_atencion_id'
        ];
    }

    public function messages(){
        return [
            'in_email.email' => 'El email ingresado no es válido', 
            'in_email.unique' => 'El email ingresado ya ha sido registrado',
            'in_telefono.between' => 'El teléfono debe tener entre :min a :max dígitos',
            'in_telefono.unique' => 'El teléfono ingresado ya ha sido registrado', 
            'in_distrito.exists' => 'El distrito seleccionado no es válido',
            'in_turno.exists' => 'El turno seleccionado no es válido'
        ];
    }
}
