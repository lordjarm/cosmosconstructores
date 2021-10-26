@extends('layouts.layout')
@section('title' , "Registrar Aptos")
@section('content')
	
	<div class="row table-dark">
        <div class="col-12">
            <form  method="POST" action="{{route("aptoss.store")}}">
                @csrf
                <div class="form-group">
                    <label class="label">Nombre del Proyecto</label> <br>
                    <label class="label">{{ $proyectos->nombre }}</label>
                    <input required name="proyecto_id" type="hidden" value="{{ $proyectos->id }}">
                </div>
                <div class="form-group">
                    <label class="label">Seleccione el Piso</label>
                    <select required name="piso_id" class="form-control" >
                        <option value="">-- Escoja un Piso --</option>
                        @foreach ($pisos as $piso)
                            <option value="{{ $piso['id'] }}">{{ $piso['nombre'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="container">
                    @for ($i = 1; $i <= $piso['numero_apto_piso']; $i++)
                        <div class="row align-items-start">
                            <div class="col">
                                <label class="label">Seleccione el tipo de Apto</label>
                                <select id='opciones' required name="tipo_apto_id[{{ $i }}]" class="form-control">
                                    <option value="">-- Escoja un tipo de Apto --</option>
                                    @foreach ($tipoaptos as $tipoapto)
                                        <option value="{{ $tipoapto['id'] }}">{{ $tipoapto['nombre_tipo'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col text-center">
                                <label class="label">Estado del Apto:</label> <br>
                                 @foreach ($estadoaptos as $estadoapto)
                                     @if ($estadoapto->id==1)
                                         <label class="label">{{$estadoapto->nombre_estado }}</label>
                                         <input required name="estado_id[{{ $i }}]" type="hidden" value="{{ $estadoapto['id'] }}" >
                                    @endif
                                  @endforeach     
                            </div>
                            <div class="col">
                                <label class="label">Número del Apto</label>
                                <input required autocomplete="off" name="numero_apto[{{ $i }}]" class="form-control" type="number" placeholder="Número del Apto" >
                            </div>
                        </div>
                    @endfor
                </div>
                <hr>
                @include("notificacion")
                <button class="btn btn-success">Guardar</button>
                
               
            </form>
        </div>
    </div>
<hr>
@endsection
