<?php

namespace App\Http\Controllers;

use App\Proyecto;
use App\Apto;
use App\Piso;
use App\TipoApto;
use App\EstadoApto;
use Illuminate\Http\Request;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("proyecto", ["proyectos"=>Proyecto::all()]);
    }
    public function  preventa(Request $request)
    {
        $id=$request->proyecto_id;
        $proyectos=Proyecto::find($id);
        $pisos=Piso::where('proyecto_id',$id)->get();
        $aptos=Apto::where('proyecto_id',$id)->get();
        $tipoaptos=TipoApto::all();
        $estadoaptos=EstadoApto::all();
        //dd($aptos);
        return view("proyectoindex", compact('proyectos','pisos','aptos','tipoaptos','estadoaptos'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function show(Proyecto $proyecto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function edit(Proyecto $proyecto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proyecto $proyecto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proyecto $proyecto)
    {
        //
    }
}
