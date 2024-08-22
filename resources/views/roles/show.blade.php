@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles del Rol</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Nombre: {{ $rol->nombre_rol }}</h5>
                <a href="{{ route('roles.index') }}" class="btn btn-primary">Volver al listado</a>
            </div>
        </div>
    </div>
@endsection
