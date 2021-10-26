@extends('layouts.layout')
@section('title' , "Proyecto")
@section('content')
	
	<h1 class="text-white">Selecciona un proyecto</h1>
    
    <div class="row">
        <div class="col-12">
            <div class="panel panel-default">
                
                
                <div class="form-group">
                    <form action="{{route("proyecto.preventa")}}" method="post" class="mb-2" >
                        @csrf
                        <div class="form-group">
                            <select required name="proyecto_id" class="form-control" >
                                <option value="">-- Escoja un Proyecto --</option>
                                @foreach ($proyectos as $proyecto)
                                    <option value="{{ $proyecto['id'] }}">{{ $proyecto['nombre'] }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button class="btn btn-success">Consultar</button>
                    </form>
                 </div>
                    

                
            </div>
        </div>
    </div>
     
  
    
    
    
@endsection

