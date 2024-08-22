@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="my-4 text-center">Editar Producto</h1>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('productos.update', $producto->id_producto) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" class="form-control" value="{{ $producto->nombre }}" placeholder="Ingrese el nombre del producto">
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio:</label>
                        <input type="number" step="0.01" name="precio" class="form-control" value="{{ $producto->precio }}" placeholder="Ingrese el precio del producto">
                    </div>
                    <div class="form-group">
                        <label for="stock">Stock:</label>
                        <input type="number" name="stock" class="form-control" value="{{ $producto->stock }}" placeholder="Ingrese la cantidad de stock disponible">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-save"></i> Actualizar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
