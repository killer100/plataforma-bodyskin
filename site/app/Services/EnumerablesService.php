<?php

namespace App\Services;

use App\Models\bs_turno;

class EnumerablesService
{

    public function Turnos(){
        return bs_turno::Where('estado', 1)->OrderBy('bs_turno_atencion_id')->get()->toArray();
    }
}
