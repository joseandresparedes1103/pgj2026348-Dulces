@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Nuevo Rol</h1>
        <form action="{{ route('roles.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre_rol">Nombre</label>
                <input type="text" class="form-control" id="nombre_rol" name="nombre_rol" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
