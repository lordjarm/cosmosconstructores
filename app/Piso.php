<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Piso extends Model
{
    protected $table = "pisos";
    protected $fillable = ["proyecto_id","numero_piso","numero_apto_piso"];
}
