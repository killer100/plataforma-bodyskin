<?php

namespace App\Services;

use App\Models\Distrito;

class UbigeoService
{
    
    public function ListarDistritos(){
        return $distritos = Distrito::Where('estado', 1)->OrderBy('distrito')->get()->toArray();
    }
}
