@extends('layouts.layout')
@section('title' , "Registrar Proyecto")
@section('content')
	
	<div class="row table-dark">
        <div class="col-12">
            <form method="POST" action="{{route("proyectos.store")}}">
                @csrf
                <div class="form-group">
                    <label class="label">Nombre del proyecto</label>
                    <input required autocomplete="off" name="nombre" class="form-control"
                           type="text" placeholder="Nombre del proyecto">
                </div>
                <div class="form-group">
                    <label class="label">Direccion del proyecto</label>
                    <input required autocomplete="off" name="direccion" class="form-control"
                           type="text" placeholder="Direccion del proyecto">
                </div>
                 <div class="form-group">
                    <label class="label">Descripcion del proyecto</label>
                    <input required autocomplete="off" name="descripcion" class="form-control"
                           type="text" placeholder="Descripcion del proyecto">
                </div>

                @include("notificacion")
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{route("proyectos.index")}}">Volver al listado</a>
            </form>
        </div>
    </div>

@endsection