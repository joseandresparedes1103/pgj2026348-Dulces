<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    public function show($id)
    {
        $venta = Venta::with('detalleVentas.producto')->findOrFail($id);
        return view('tienda.factura', compact('venta'));
    }
}
