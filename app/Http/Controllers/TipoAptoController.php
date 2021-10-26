<?php

namespace App\Http\Controllers;

use App\TipoApto;
use Illuminate\Http\Request;

class TipoAptoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("tipoapto.tipoaptoindex", ["tipoaptos"=>tipoapto::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("tipoapto.tipoaptocreate");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipo_apto = new TipoApto($request->input());
        $tipo_apto->saveOrFail();
        return redirect()->route("tipoaptos.index")->with(["mensaje" => "TIPO APTO CREADO",]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TipoApto  $tipoApto
     * @return \Illuminate\Http\Response
     */
    public function show(TipoApto $tipoApto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoApto  $tipoApto
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoApto $tipoapto)
    {
        return view("tipoapto.tipoaptoedit", ["tipoapto" => $tipoapto,]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoApto  $tipoApto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoApto $tipoapto)
    {
        $tipoapto->fill($request->input())->saveOrFail();
        return redirect()->route("tipoaptos.index")->with(["mensaje" => "TIPO APTO ACTUALIZADO"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoApto  $tipoApto
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoApto $tipoapto)
    {
         $tipoapto->delete();
         return redirect()->route("tipoaptos.index")->with(["mensaje" => "TIPO APTO ELIMINADO",]);
    }
}
