@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles del Usuario</h1>
        <table class="table">
            <tr>
                <th>ID</th>
                <td>{{ $usuario->id_usuario }}</td>
            </tr>
            <tr>
                <th>Correo</th>
                <td>{{ $usuario->correo_usuario }}</td>
            </tr>
            <tr>
                <th>Role</th>
                <td>{{ $usuario->role->name }}</td>
            </tr>
            <tr>
                <th>Estado</th>
                <td>{{ $usuario->estado->name }}</td>
            </tr>
            <tr>
                <th>Error</th>
                <td>{{ $usuario->error_usuario }}</td>
            </tr>
        </table>
        <a href="{{ route('usuarios.index') }}" class="btn btn-primary">Volver</a>
    </div>
@endsection
