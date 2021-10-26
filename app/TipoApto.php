<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoApto extends Model
{
    protected $table = "tipo_aptos";
    protected $fillable = ["nombre_tipo","descripcion"];
}
