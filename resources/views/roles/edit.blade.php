@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Rol</h1>
        <form action="{{ route('roles.update', $rol->id_rol) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre_rol">Nombre</label>
                <input type="text" class="form-control" id="nombre_rol" name="nombre_rol" value="{{ $rol->nombre_rol }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
@endsection
