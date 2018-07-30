<?php

namespace App\Services;

use App\Http\Requests\ContactoRequest;
use App\Models\bs_contacto;
use Carbon\Carbon;

class ContactService
{

    public function GuardarContacto(ContactoRequest $request) {
        $contacto                       = new bs_contacto;
        $contacto->nombres              = $request->in_nombre;
        $contacto->apellidos            = $request->in_apellidos;
        $contacto->codigo_distrito      = $request->in_distrito;
        $contacto->phone                = $request->in_telefono;
        $contacto->email                = $request->in_email;
        $contacto->fecha_registro       = Carbon::now();
        $contacto->bs_turno_atencion_id = $request->turno_atencion_id;
        $contacto->save();

        return $contacto->bs_contacto_id;
    }

    public function ListarContacto($id_contacto) {
        return bs_contacto::find($id_contacto);
    }
}
