@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1>Detalle del Producto</h1>
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" value="{{ $producto->nombre }}" readonly>
        </div>
        <div class="form-group">
            <label for="precio">Precio:</label>
            <input type="text" name="precio" class="form-control" value="{{ $producto->precio }}" readonly>
        </div>
        <div class="form-group">
            <label for="stock">Stock:</label>
            <input type="text" name="stock" class="form-control" value="{{ $producto->stock }}" readonly>
        </div>
        <a href="{{ route('productos.index') }}" class="btn btn-primary">Volver</a>
    </div>
@endsection
