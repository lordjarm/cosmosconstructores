<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoApto extends Model
{
    protected $table = "estado_aptos";
    protected $fillable = ["nombre_estado"];
}
