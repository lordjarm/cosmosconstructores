<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apto extends Model
{
    protected $table = "aptos";
    protected $fillable = ["tipo_apto_id","estado_id","proyecto_id","piso_id","numero_apto"];
}
