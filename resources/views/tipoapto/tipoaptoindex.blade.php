@extends('layouts.layout')
@section('title' , "Tipo Apto")
@section('content')
	
	<div class="row">
        <div class="col-12">
            <div class="panel panel-default">
                <a href="{{route("tipoaptos.create")}}" class="btn btn-success mb-2">Agregar</a>
                @include("notificacion")
                <table class="table table-bordered table-dark">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Detalle</th>
                        <th>Editar</th>
                        <th>Eliminar</th></tr>
                    </thead>
                    <tbody>
                    @foreach($tipoaptos as $tipoapto)
                        <tr>
                            <td>{{$tipoapto->nombre_tipo}}</td>
                            <td>{{$tipoapto->descripcion}}</td>
                            <td>
                                <a class="btn btn-warning" href="{{route("tipoaptos.edit",[$tipoapto])}}">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{route("tipoaptos.destroy", [$tipoapto])}}" method="post">
                                    @method("delete")
                                    @csrf
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection