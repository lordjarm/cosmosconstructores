@extends('layouts.layout')
@section('title' , "Usuarios")
@section('content')
	
	<div class="row">
        <div class="col-12">
            <div class="panel panel-default">
                <a href="{{route("users.create")}}" class="btn btn-success mb-2">Agregar</a>
                @include("notificacion")
                <table class="table table-bordered table-dark">
                    <thead>
                    <tr>
                        <th>Nombre</th>

                        <th>Editar</th>
                        <th>Eliminar</th></tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>
                                <a class="btn btn-warning" href="{{route("users.edit",[$user])}}">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{route("users.destroy", [$user])}}" method="post">
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