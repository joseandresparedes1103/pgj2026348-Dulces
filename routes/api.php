<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



use App\Http\Controllers\ControllerAPI\ClientesControllerAPI;

Route::get('/clientes', [ClientesControllerAPI::class, 'index'])->name('api.clientes.index');
Route::post('/clientes', [ClientesControllerAPI::class, 'store'])->name('api.clientes.store');
Route::get('/clientes/{cliente}', [ClientesControllerAPI::class, 'show'])->name('api.clientes.show');
Route::put('/clientes/{cliente}', [ClientesControllerAPI::class, 'update'])->name('api.clientes.update');
Route::delete('/clientes/{cliente}', [ClientesControllerAPI::class, 'destroy'])->name('api.clientes.destroy');
