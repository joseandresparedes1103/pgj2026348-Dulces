@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="my-4">Productos Disponibles</h1>

        <!-- Buscador -->
        <form method="GET" action="{{ route('tienda.index') }}" class="mb-4">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Buscar producto por nombre..." value="{{ request('search') }}">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Buscar</button>
                </div>
            </div>
        </form>

        <!-- Mostrar el mensaje de error si existe -->
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('tienda.comprar') }}" method="POST">
            @csrf
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productos as $producto)
                        <tr>
                            <td>{{ $producto->nombre }}</td>
                            <td>{{ $producto->precio }}</td>
                            <td>
                                <input type="number" class="form-control" name="productos[{{ $producto->id_producto }}]" min="0" value="0">
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="form-group">
                <label for="efectivo">Efectivo Recibido</label>
                <input type="text" class="form-control" name="efectivo" placeholder="Efectivo recibido" required>
            </div>

            <button type="submit" class="btn btn-primary btn-lg">Comprar</button>
        </form>

        <!-- Paginador -->
        <div class="d-flex justify-content-center mt-4">
            <nav aria-label="Page navigation">
                {{ $productos->appends(request()->query())->links('pagination::bootstrap-4') }}
            </nav>
        </div>
    </div>
@endsection
