@extends('layouts.layout')
@section('title' , "Proyecto")
@section('content')
    <h1 class="text-white">Proyecto {{ $proyectos->nombre }}</h1>
    <div class="row table-dark">
        <div class="col-12">
            
                <div class="form-group">
                </div>
                    <div class="container">
                        <h2 class="text-white"> Informacion del Proyecto </h2>
                        <div class="row align-items-start">
                            <div class="col">
                                <label class="text-white"> Descripcion</label>
                                <p class="text-justify text-white">{{ $proyectos->descripcion }}</p>
                            </div>
                            <div class="col">
                                <label class="text-white ">Direccion</label>
                                <p class="text-justify text-white">{{ $proyectos->direccion }}</p>

                            </div>
                        </div>
                    </div>
                <div class="form-group">
                    <h1><small>Pisos</small></h1>
                    @foreach ($pisos as $piso)
                        <div class="form-group">
                            <label>{{ $piso->nombre }}</label>
                                @foreach ($aptos as $apto)
                                    @if ($piso->id==$apto->piso_id)
                                        <div class="form-group">
                                            <div class="container">
                                                <label class="text-white"> Apto No. {{ $apto->numero_apto }} </label>
                                                <div class="row align-items-start">
                                                    <div class="col">
                                                        @foreach ($tipoaptos as $tipoapto)
                                                            @if ($apto->tipo_apto_id==$tipoapto->id)
                                                                <label class="text-white"> Tipo de Apto: {{ $tipoapto->nombre_tipo }}</label>
                                                                <p class="text-justify text-white">{{ $tipoapto->descripcion }}</p>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                    <div class="col">
                                                        @foreach ($estadoaptos as $estadoapto)
                                                            @if ($apto->estado_id==$estadoapto->id)
                                                                <label class="text-white ">Disponibilidad {{ $estadoapto->nombre_estado }}</label>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                    <div class="col">
                                                        <a class="btn btn-primary pull-right" data-toggle="modal" data-target="#proyectomodal">Reservar Apto</a>
                                                        @include('proyectomodal')
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                     @endif
                                @endforeach
                        </div>
                     @endforeach 
                </div>
                 <div class="form-group">
                </div>
            
        </div>
    </div>
@endsection
