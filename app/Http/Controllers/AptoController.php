<?php

namespace App\Http\Controllers;

use App\Apto;
use App\Piso;
use App\Proyecto;
use App\TipoApto;
use App\EstadoApto;
use Illuminate\Http\Request;

class AptoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $id=$request->proyectoId;
        $proyectos=Proyecto::find($id);
        $pisos=Piso::where('proyecto_id',$id)->get();
        $tipoaptos=TipoApto::all();
        $estadoaptos=EstadoApto::all();
        return view("aptos.aptoscreate",compact('proyectos','pisos','tipoaptos','estadoaptos'));
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
        $cont=count($request->numero_apto);
        //dd($cont);
        for ($i=1; $i <=$cont ; $i++) { 
            $apto = new Apto();
            $apto->proyecto_id=$request->proyecto_id;
            $apto->piso_id=$request->piso_id;
            $apto->tipo_apto_id=$request->tipo_apto_id[$i];
            $apto->estado_id=$request->estado_id[$i];
            $apto->numero_apto=$request->numero_apto[$i];
            $apto->save();
        }
        //return view("pisos.pisosindex", compact('pisos','proyectos'));
        return redirect()->route("proyectos.index")->with(["mensaje" => "APTOS CREADOS",]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Apto  $apto
     * @return \Illuminate\Http\Response
     */
    public function show(Apto $apto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Apto  $apto
     * @return \Illuminate\Http\Response
     */
    public function edit(Apto $apto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Apto  $apto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apto $apto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Apto  $apto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apto $apto)
    {
        //
    }
}
