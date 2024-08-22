<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ConfiguracionController extends Controller
{
    public function index()
    {
        // Obtener el estado actual del modo oscuro desde la configuración
        $modoOscuro = config('adminlte.layout_dark_mode');

        return view('configuracion', ['modoOscuro' => $modoOscuro]);
    }

    public function actualizar(Request $request)
    {
        // Obtener el valor seleccionado del modo desde la solicitud
        $modo = $request->modo;

        // Actualizar la configuración de modo oscuro en adminlte.php
        $adminlteConfig = File::get(config_path('adminlte.php'));
        $adminlteConfig = preg_replace("/('layout_dark_mode' => )[^,]+(,)/", "$1$modo$2", $adminlteConfig);
        File::put(config_path('adminlte.php'), $adminlteConfig);

        return redirect()->back()->with('success', 'Configuración de modo oscuro actualizada correctamente.');
    }
}
