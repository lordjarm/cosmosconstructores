@extends('layouts.layout')
@section('title' , "Proyectos")
@section('content')
	
	<div class="row">
        <div class="col-12">
            <div class="panel panel-default">
                <a href="{{route("proyectos.create")}}" class="btn btn-success mb-2">Agregar Proyecto</a>
                <a href="{{route("pisos.create")}}" class="btn btn-success mb-2">Agregar Pisos Proyecto</a>
                @include("notificacion")
                <table class="table table-bordered table-dark">
                    <thead class="text-center">
                    <tr>
                        <th >Nombre</th>
                        <th>Pisos</th>
                        <th>Editar</th>
                        <th>Eliminar</th></tr>
                    </thead>
                    <tbody class="text-center">
                    @foreach($proyectos as $proyecto)
                        <tr>
                            <td>{{$proyecto->nombre}}</td>
                            <td>
                                <form action="{{route("pisos.index1")}}" method="post" >
                                    @csrf
                                    <input  name="proyectoId" type="hidden" value="{{ $proyecto->id }}">
                                    <button type="submit" class="btn btn-light">
                                        Ver pisos
                                    </button>
                                </form>
                            </td>
                            <td>
                                <a class="btn btn-warning" href="{{route("proyectos.edit",[$proyecto])}}">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{route("proyectos.destroy", [$proyecto])}}" method="post">
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