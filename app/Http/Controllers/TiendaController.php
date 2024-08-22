<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Venta;
use App\Models\DetalleVenta;
use Illuminate\Http\Request;

class TiendaController extends Controller
{
public function index(Request $request)
    {
        $query = Producto::query();

        // Buscar por nombre de producto si se ingresó algo en el campo de búsqueda
        if ($request->filled('search')) {
            $query->where('nombre', 'like', '%' . $request->input('search') . '%');
        }

        // Paginación de 9 productos por página
        $productos = $query->paginate(4);

        return view('tienda.index', compact('productos'));
    }

    public function comprar(Request $request)
    {
        // Validar que el efectivo sea mayor o igual a 0
        $request->validate([
            'efectivo' => 'required|numeric|min:0',
            'productos.*' => 'integer|min:0',
        ]);

        $total = 0;
        $productos_comprados = [];

        foreach ($request->productos as $id_producto => $cantidad) {
            if ($cantidad > 0) {
                $producto = Producto::find($id_producto);

                // Verificar si hay suficiente stock
                if ($producto->stock < $cantidad) {
                    return back()->with('error', 'No hay suficiente stock para el producto: ' . $producto->nombre);
                }

                $subtotal = $producto->precio * $cantidad;
                $productos_comprados[] = [
                    'producto' => $producto,
                    'cantidad' => $cantidad,
                    'subtotal' => $subtotal,
                ];

                $total += $subtotal;
            }
        }

        if (empty($productos_comprados)) {
            return back()->with('error', 'Debe seleccionar al menos un producto.');
        }

        // Verificar si el efectivo recibido es suficiente para cubrir el total de la compra
        if ($request->efectivo < $total) {
            return back()->with('error', 'Efectivo insuficiente. Se requiere ' . ($total - $request->efectivo) . ' más para completar la compra.');
        }

        // Crear la venta
        $venta = new Venta();
        $venta->total = $total;
        $venta->efectivo_recibido = $request->efectivo;
        $venta->cambio = $request->efectivo - $total;
        $venta->save();

        // Crear los detalles de la venta y reducir el stock
        foreach ($productos_comprados as $compra) {
            DetalleVenta::create([
                'id_venta' => $venta->id_venta,
                'id_producto' => $compra['producto']->id_producto,
                'cantidad' => $compra['cantidad'],
                'subtotal' => $compra['subtotal'],
            ]);

            $compra['producto']->stock -= $compra['cantidad'];
            $compra['producto']->save();
        }

        return redirect()->route('tienda.factura', ['venta' => $venta->id_venta]);
    }
}
