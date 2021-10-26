@extends('layouts.layout')
@section('title' , "Registrar Tipo de Apto")
@section('content')
	
	<div class="row table-dark">
        <div class="col-12">
            <form method="POST" action="{{route("tipoaptos.store")}}">
                @csrf
                <div class="form-group">
                    <label class="label">Nombre Tipo Apto</label>
                    <input required autocomplete="off" name="nombre_tipo" class="form-control"
                           type="text" placeholder="Nombre Tipo Apto">
                </div>
                 <div class="form-group">
                    <label class="label">Descripcion</label>
                    <input required autocomplete="off" name="descripcion" class="form-control"
                           type="text" placeholder="Descripcion">
                </div>

                @include("notificacion")
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{route("tipoaptos.index")}}">Volver al listado</a>
            </form>
        </div>
    </div>

@endsection