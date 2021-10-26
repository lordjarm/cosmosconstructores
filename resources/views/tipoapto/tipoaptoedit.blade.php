@extends('layouts.layout')
@section('title' , "Editar Proyecto")
@section('content')
	
	<div class="row table-dark">
        <div class="col-12">
            <form method="POST" action="{{route("tipoaptos.update", [$tipoapto])}}">
                @method("PUT")
                @csrf
                <div class="form-group">
                    <label class="label">Nombre Tipo Apto</label>
                    <input required value="{{$tipoapto->nombre_tipo}}" autocomplete="off" name="nombre_tipo" class="form-control"
                           type="text" placeholder="Nombre Tipo Apto">
                </div>
                <div class="form-group">
                    <label class="label">Descripcion</label>
                    <input required value="{{$tipoapto->descripcion}}" autocomplete="off" name="descripcion" class="form-control"type="text" placeholder="Descripcion">
                </div>
                @include("notificacion")
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{route("tipoaptos.index")}}">Volver</a>
            </form>
        </div>
    </div>

@endsection