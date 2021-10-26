<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgregarEstadoApto extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estado_aptos')->insert([
            'nombre_estado'  => 'Si esta disponible',
        ]);
        DB::table('estado_aptos')->insert([
            'nombre_estado'  => 'En intencion de compra',
        ]);
        DB::table('estado_aptos')->insert([
            'nombre_estado'  => 'Separado',
        ]);
    }
}
