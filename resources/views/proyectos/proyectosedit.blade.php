@extends('layouts.layout')
@section('title' , "Editar Proyecto")
@section('content')
	
	<div class="row table-dark">
        <div class="col-12">
            <form method="POST" action="{{route("proyectos.update", [$proyecto])}}">
                @method("PUT")
                @csrf
                <div class="form-group">
                    <label class="label">Nombre del proyecto</label>
                    <input required value="{{$proyecto->nombre}}" autocomplete="off" name="nombre" class="form-control"
                           type="text" placeholder="Nombre del proyecto">
                </div>
                <div class="form-group">
                    <label class="label">Direccion</label>
                    <input required value="{{$proyecto->direccion}}" autocomplete="off" name="direccion" class="form-control"
                           type="text" placeholder="Direccion del proyecto">
                </div>
                <div class="form-group">
                    <label class="label">Descripcion</label>
                    <input required value="{{$proyecto->descripcion}}" autocomplete="off" name="descripcion" class="form-control"type="text" placeholder="Descripcion del proyecto">
                </div>
                @include("notificacion")
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{route("proyectos.index")}}">Volver</a>
            </form>
        </div>
    </div>

@endsection