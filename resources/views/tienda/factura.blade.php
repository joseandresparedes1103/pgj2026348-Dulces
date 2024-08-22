@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="my-4">Factura</h1>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Detalles de la Factura</h3>
            </div>
            <div class="card-body">
                <p><strong>Fecha:</strong> {{ $venta->created_at->format('d/m/Y H:i') }}</p>
                <p><strong>Total:</strong> ${{ number_format($venta->total, 2) }}</p>
                <p><strong>Efectivo Recibido:</strong> ${{ number_format($venta->efectivo_recibido, 2) }}</p>
                <p><strong>Cambio:</strong> ${{ number_format($venta->cambio, 2) }}</p>

                <h2 class="mt-4">Detalles de la Compra</h2>
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($venta->detalleVentas as $detalle)
                            <tr>
                                <td>{{ $detalle->producto->nombre }}</td>
                                <td>{{ $detalle->cantidad }}</td>
                                <td>${{ number_format($detalle->subtotal, 2) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
