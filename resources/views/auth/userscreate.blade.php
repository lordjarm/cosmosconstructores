@extends('layouts.layout')
@section('title' , "Registrar Usuario")
@section('content')
	
	<div class="row table-dark">
        <div class="col-12">
            <form method="POST" action="{{route("users.store")}}">
                @csrf
                <div class="form-group">
                    <label class="label">Nombre</label>
                    <input required autocomplete="off" name="name" class="form-control"
                           type="text" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label class="label">Email</label>
                    <input required autocomplete="off" name="email" class="form-control"
                           type="text" placeholder="Email">
                </div>
                 <div class="form-group">
                    <label class="label">Contraseña</label>
                    <input required autocomplete="off" name="password" class="form-control"
                           type="password" placeholder="Contraseña">
                </div>
                <div class="form-group">
                    <label class="label">Profesion</label>
                    <input required autocomplete="off" name="profession" class="form-control"
                           type="text" placeholder="Profesion">
                </div>

                @include("notificacion")
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{route("users.index")}}">Volver al listado</a>
            </form>
        </div>
    </div>

@endsection