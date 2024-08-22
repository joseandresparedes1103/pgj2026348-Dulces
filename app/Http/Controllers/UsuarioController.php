<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Models\Rol;
use App\Models\Estado;
use App\Models\Genero;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::with(['rol', 'estado'])->get();
        return view('usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        $generos = Genero::all();
        $estados = Estado::all();

        return view('usuarios.create', compact('generos', 'estados'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_rol' => 'required|exists:roles,id_rol',
            'correo_usuario' => 'required|email|unique:usuarios,correo_usuario',
            'contrasena_usuario' => 'required|string|min:6',
            'error_usuario' => 'required|integer',
            'id_estado' => 'required|exists:estados,id_estado',
        ], [
            'id_rol.required' => 'El rol es obligatorio.',
            'id_rol.exists' => 'El rol seleccionado no es válido.',
            'correo_usuario.required' => 'El correo electrónico es obligatorio.',
            'correo_usuario.email' => 'El correo electrónico debe ser una dirección válida.',
            'correo_usuario.unique' => 'El correo electrónico ya está registrado.',
            'contrasena_usuario.required' => 'La contraseña es obligatoria.',
            'contrasena_usuario.string' => 'La contraseña debe ser una cadena de texto.',
            'contrasena_usuario.min' => 'La contraseña debe tener al menos 6 caracteres.',
            'error_usuario.required' => 'El campo error es obligatorio.',
            'error_usuario.integer' => 'El campo error debe ser un número entero.',
            'id_estado.required' => 'El estado es obligatorio.',
            'id_estado.exists' => 'El estado seleccionado no es válido.',
        ]);

        Usuario::create($request->all());
        return redirect()->route('usuarios.index')->with('success', 'Usuario creado exitosamente.');
    }

    public function edit(Usuario $usuario)
    {
        $generos = Genero::all();
        $estados = Estado::all();
        $roles = Rol::all();
        return view('usuarios.edit', compact('usuario', 'generos', 'estados', 'roles'));
    }

    public function update(Request $request, Usuario $usuario)
    {
        $request->validate([
            'id_rol' => 'required|exists:roles,id_rol',
            'correo_usuario' => 'required|email|unique:usuarios,correo_usuario,'.$usuario->id_usuario.',id_usuario',
            'error_usuario' => 'required|integer',
            'id_estado' => 'required|exists:estados,id_estado',
        ], [
            'id_rol.required' => 'El rol es obligatorio.',
            'id_rol.exists' => 'El rol seleccionado no es válido.',
            'correo_usuario.required' => 'El correo electrónico es obligatorio.',
            'correo_usuario.email' => 'El correo electrónico debe ser una dirección válida.',
            'correo_usuario.unique' => 'El correo electrónico ya está registrado.',
            'error_usuario.required' => 'El campo error es obligatorio.',
            'error_usuario.integer' => 'El campo error debe ser un número entero.',
            'id_estado.required' => 'El estado es obligatorio.',
            'id_estado.exists' => 'El estado seleccionado no es válido.',
        ]);

        $usuario->update($request->all());
        return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado exitosamente.');
    }

    public function destroy(Usuario $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado exitosamente.');
    }

    public function show(Usuario $usuario)
    {
        return view('usuarios.show', compact('usuario'));
    }
}
