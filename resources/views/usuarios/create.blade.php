@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear Usuario</h1>
        <form action="{{ route('usuarios.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="id_role">Role:</label>
                <select class="form-control" name="id_role" required>
                    <option value="">Seleccione un role</option>
                    @foreach($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="correo_usuario">Correo:</label>
                <input type="email" class="form-control" name="correo_usuario" required>
            </div>
            <div class="form-group">
                <label for="contrasena_usuario">Contraseña:</label>
                <input type="password" class="form-control" name="contrasena_usuario" required>
            </div>
            <div class="form-group">
                <label for="error_usuario">Error:</label>
                <input type="number" class="form-control" name="error_usuario" required>
            </div>
            <div class="form-group">
                <label for="id_estado">Estado:</label>
                <select class="form-control" name="id_estado" required>
                    <option value="">Seleccione un estado</option>
                    @foreach($estados as $estado)
                        <option value="{{ $estado->id_estado }}">{{ $estado->nombre_estado }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    </div>
@endsection
