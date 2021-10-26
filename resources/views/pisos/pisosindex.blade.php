@extends('layouts.layout')
@section('title' , "Pisos")
@section('content')
    
    <div class="row">
        <div class="col-12">
            <div class="panel panel-default">
                <a href="{{route("proyectos.index")}}" class="btn btn-primary mb-2" >Volver al listado de proyectos</a>
                <form action="{{route("aptosc.create")}}" method="post" class="mb-2" >
                                    @csrf
                                    <input  name="proyectoId" type="hidden" value="{{ $proyectos->id }}">
                                    <button type="submit" class="btn btn-success mb-2">
                                        Agregar Aptos Proyecto
                                    </button>
                                </form>
                
                <table class="table table-bordered table-dark">
                    <thead class="text-center">
                    <tr>
                        <th>Nombre Proyecto</th>
                        <th>Numero Piso</th>
                        <th>Numero de aptos por piso</th>
                        <th>Ver Aptos</th>
                        <!--th>Editar</th>
                        <th>Eliminar</th></tr-->
                    </thead>
                    <tbody class="text-center">
                    @foreach($pisos as $piso )
                        <tr>
                            <td>{{$proyectos->nombre}}</td>
                            <td>{{$piso->nombre}}</td>
                            <td>{{$piso->numero_apto_piso}}</td>
                             <td>
                                <form action="#" method="post" >
                                    @csrf
                                    <input  name="proyectoId" type="hidden" value="{{ $proyectos->id }}">
                                    <button type="submit" class="btn btn-light">
                                        Ver Aptos
                                    </button>
                                </form>
                            </td>
                            <!--td>
                                <a class="btn btn-warning" href="{{route("pisos.edit",[$piso])}}">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{route("pisos.destroy", [$piso])}}" method="post">
                                    @method("delete")
                                    @csrf
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td-->
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection