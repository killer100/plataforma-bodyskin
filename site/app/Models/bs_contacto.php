<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class bs_contacto extends Model
{
    protected $primaryKey = 'bs_contacto_id';
    protected $table = 'bs_contacto';
    public $timestamps = false;

    public function distrito(){
        return $this->hasOne('App\Models\Distrito', 'codigo_distrito', 'codigo_distrito');
    }

    public function bs_turno_atencion(){
        return $this->hasOne('App\Models\bs_turno_atencion', 'bs_turno_atencion_id', 'bs_turno_atencion_id');
    }

}
