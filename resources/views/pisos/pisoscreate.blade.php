@extends('layouts.layout')
@section('title' , "Registrar Pisos")
@section('content')
	
	<div class="row table-dark">
        <div class="col-12">
            <form method="POST" action="{{route("pisoss.store")}}">
                @csrf
                <div class="form-group">
                    <label class="label">Seleccione el proyecto</label>
                    <select required name="proyecto_id" class="form-control" >
                        <option value="">-- Escoja un Proyecto --</option>
                        @foreach ($proyectos as $proyecto)
                            <option value="{{ $proyecto['id'] }}">{{ $proyecto['nombre'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label class="label">Escriba el número de pisos que tiene el proyecto</label>
                    <input required autocomplete="off" name="numero_piso" class="form-control"
                           type="number" placeholder="Número de pisos solo numeros" min="1" max="20">
                </div>
                 <div class="form-group">
                    <label class="label">Escriba el número de aptos por piso</label>
                    <input required autocomplete="off" name="numero_apto_piso" class="form-control"
                           type="number" placeholder="Número de aptos solo numeros" min="1" max="6">
                </div>

                @include("notificacion")
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{route("proyectos.index")}}">Volver al listado</a>
            </form>
        </div>
    </div>

@endsection