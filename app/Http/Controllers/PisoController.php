<?php

namespace App\Http\Controllers;

use App\Piso;
use App\Proyecto;
use Illuminate\Http\Request;

class PisoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $proyectos=Proyecto::all(); 
       return view("pisos.pisosindex",compact('proyectos'));
    }
     public function index1(Request $request)
    {
        //dd($request->all());
        $id=$request->proyectoId;
        $proyectos=Proyecto::find($id);
        $pisos=Piso::where('proyecto_id',$id)->get();
        //dd($pisos);
        if ($pisos->isEmpty()) {
         return redirect()->route("proyectos.index")->with(["mensaje" => "POR FAVOR CREAR LOS PISOS PRIMERO",]);
        }
        return view("pisos.pisosindex", compact('pisos','proyectos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proyectos=Proyecto::all();
        return view("pisos.pisoscreate",compact('proyectos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $cont=$request->numero_piso;
        //dd($encuesta);
        
        for ($i=1; $i <=$cont ; $i++) { 
            $pisos= new Piso();
            $pisos->proyecto_id=$request->proyecto_id;
            $pisos->numero_piso=$i;
            $pisos->numero_apto_piso=$request->numero_apto_piso;
            $pisos->nombre="Piso# $i";
            $pisos->save(); 
        }
        return redirect()->route("proyectos.index")->with(["mensaje" => "PISOS CREADOS",]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Piso  $piso
     * @return \Illuminate\Http\Response
     */
    public function show(Piso $piso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Piso  $piso
     * @return \Illuminate\Http\Response
     */
    public function edit(Piso $piso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Piso  $piso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Piso $piso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Piso  $piso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Piso $piso)
    {
        //
    }
}
