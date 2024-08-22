<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]); // Agrega las rutas de verificación de correo electrónico

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');




use App\Http\Controllers\UserController;

Route::middleware(['auth'])->group(function () {
    Route::resource('users', UserController::class);
});



Route::middleware(['auth'])->group(function () {
    Route::resource('users', UserController::class)->middleware('role:admin');
});







Route::get('/empleadoprincipal', function () {
    return view('empleadoprincipal');
})->name('empleadoprincipal');


Route::get('/clienteprincipal', function () {
    return view('clienteprincipal');
})->name('clienteprincipal');


Route::get('/informacion', function () {
    return view('informacion');
})->name('informacion');




use App\Http\Controllers\ConfiguracionController;

Route::get('configuracion', [ConfiguracionController::class, 'index'])->name('configuracion');
Route::post('configuracion', [ConfiguracionController::class, 'actualizar'])->name('configuracion.actualizar');






use App\Http\Controllers\ProductoController;

Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');  // Mostrar la lista de productos
Route::get('/productos/create', [ProductoController::class, 'create'])->name('productos.create');  // Mostrar el formulario para crear un nuevo producto
Route::post('/productos', [ProductoController::class, 'store'])->name('productos.store');  // Guardar un nuevo producto
Route::get('/productos/{producto}', [ProductoController::class, 'show'])->name('productos.show');  // Mostrar un producto específico
Route::get('/productos/{producto}/edit', [ProductoController::class, 'edit'])->name('productos.edit');  // Mostrar el formulario para editar un producto
Route::put('/productos/{producto}', [ProductoController::class, 'update'])->name('productos.update');  // Actualizar un producto existente
Route::delete('/productos/{producto}', [ProductoController::class, 'destroy'])->name('productos.destroy');  // Eliminar un producto


use App\Http\Controllers\TiendaController;
use App\Http\Controllers\FacturaController;

Route::get('/tienda', [TiendaController::class, 'index'])->name('tienda.index');
Route::post('/tienda/comprar', [TiendaController::class, 'comprar'])->name('tienda.comprar');
Route::get('/tienda/factura/{venta}', [FacturaController::class, 'show'])->name('tienda.factura');





use App\Http\Controllers\RolController;

// Ruta para mostrar todos los roles en una tabla
Route::get('/roles', [RolController::class, 'index'])->name('roles.index');

// Ruta para mostrar el formulario de creación de rol
Route::get('/roles/create', [RolController::class, 'create'])->name('roles.create');

// Ruta para almacenar un nuevo rol en la base de datos
Route::post('/roles', [RolController::class, 'store'])->name('roles.store');

// Ruta para mostrar los detalles de un rol específico
Route::get('/roles/{rol}', [RolController::class, 'show'])->name('roles.show');

// Ruta para mostrar el formulario de edición de un rol
Route::get('/roles/{rol}/edit', [RolController::class, 'edit'])->name('roles.edit');

// Ruta para actualizar los datos de un rol en la base de datos
Route::put('/roles/{rol}', [RolController::class, 'update'])->name('roles.update');

// Ruta para eliminar un rol de la base de datos
Route::delete('/roles/{rol}', [RolController::class, 'destroy'])->name('roles.destroy');





use App\Http\Controllers\UsuarioController;

// Ruta para mostrar todos los usuarios en una tabla
Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');

// Ruta para mostrar el formulario de creación de usuario
Route::get('/usuarios/create', [UsuarioController::class, 'create'])->name('usuarios.create');

// Ruta para almacenar un nuevo usuario en la base de datos
Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');

// Ruta para mostrar los detalles de un usuario específico
Route::get('/usuarios/{usuario}', [UsuarioController::class, 'show'])->name('usuarios.show');

// Ruta para mostrar el formulario de edición de un usuario
Route::get('/usuarios/{usuario}/edit', [UsuarioController::class, 'edit'])->name('usuarios.edit');

// Ruta para actualizar los datos de un usuario en la base de datos
Route::put('/usuarios/{usuario}', [UsuarioController::class, 'update'])->name('usuarios.update');

// Ruta para eliminar un usuario de la base de datos
Route::delete('/usuarios/{usuario}', [UsuarioController::class, 'destroy'])->name('usuarios.destroy');
























