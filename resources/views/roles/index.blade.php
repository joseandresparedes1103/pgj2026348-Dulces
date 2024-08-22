@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Listado de Roles</h1>
        <a href="{{ route('roles.create') }}" class="btn btn-success mb-3">Nuevo Rol</a>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $rol)
                    <tr>
                        <td>{{ $rol->id_rol }}</td>
                        <td>{{ $rol->nombre_rol }}</td>
                        <td>
                            <a href="{{ route('roles.show', $rol->id_rol) }}" class="btn btn-primary btn-sm">Ver</a>
                            <a href="{{ route('roles.edit', $rol->id_rol) }}" class="btn btn-info btn-sm">Editar</a>
                            <form action="{{ route('roles.destroy', $rol->id_rol) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de querer eliminar este rol?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
