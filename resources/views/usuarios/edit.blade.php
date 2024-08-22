@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Usuario</h1>
        <form action="{{ route('usuarios.update', $usuario->id_usuario) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="id_role">Role:</label>
                <input type="text" class="form-control" name="id_role" value="{{ $usuario->id_role }}" required>
            </div>
            <div class="form-group">
                <label for="correo_usuario">Correo:</label>
                <input type="email" class="form-control" name="correo_usuario" value="{{ $usuario->correo_usuario }}" required>
            </div>
            <div class="form-group">
                <label for="contrasena_usuario">Contraseña:</label>
                <input type="password" class="form-control" name="contrasena_usuario" required>
            </div>
            <div class="form-group">
                <label for="error_usuario">Error:</label>
                <input type="number" class="form-control" name="error_usuario" value="{{ $usuario->error_usuario }}" required>
            </div>
            <div class="form-group">
                <label for="id_estado">Estado:</label>
                <input type="text" class="form-control" name="id_estado" value="{{ $usuario->id_estado }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
@endsection
