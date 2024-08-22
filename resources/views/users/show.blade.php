@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1>Detalles del Usuario</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Correo: {{ $usuario->correo_usuario }}</h5>
                <p>Rol: {{ $usuario->rol->nombre_rol }}</p>
                <p>Error: {{ $usuario->error_usuario }}</p>
                <p>Estado: {{ $usuario->estado->nombre_estado }}</p>
                <a href="{{ route('usuarios.index') }}" class="btn btn-primary">Volver al listado</a>
            </div>
        </div>
    </div>
@endsection
