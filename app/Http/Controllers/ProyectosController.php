<?php

namespace App\Http\Controllers;

use App\Proyecto;
use Illuminate\Http\Request;

class ProyectosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("proyectos.proyectosindex", ["proyectos"=>Proyecto::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("proyectos.proyectoscreate");
    }
   /* public function busca(Request $request)
    {
        $proyecto = new Proyecto::all();
        $proyesto->find($request->id);

        return $proyecto;
    }*/
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proyecto = new Proyecto($request->input());
        $proyecto->saveOrFail();
        return redirect()->route("proyectos.index")->with(["mensaje" => "PROYECTO CREADO",]);
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
        return view("proyectos.proyectosedit", ["proyecto" => $proyecto,]);
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
        $proyecto->fill($request->input())->saveOrFail();
        return redirect()->route("proyectos.index")->with(["mensaje" => "PROYECTO ACTUALIZADO"]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proyecto  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proyecto $proyecto)
    {
        $proyecto->delete();
        return redirect()->route("proyectos.index")->with(["mensaje" => "PROYECTO ELIMINADO",]);
    }
}
