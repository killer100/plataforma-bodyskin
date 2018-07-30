<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    protected $primaryKey = 'codigo_distrito';
    protected $table = 'distrito';
    public $timestamps = false;
}
