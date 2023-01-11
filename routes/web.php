<?php

use App\Http\Controllers\FullStack\MascotaController;
use App\Http\Controllers\FullStack\PersonaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [PersonaController::class, 'index']);
Route::post('/register', [PersonaController::class, 'register']);
Route::get('/mascotas',[MascotaController::class, 'index'])->name('mascotas');
Route::post('/agregar/{persona_id}',[MascotaController::class, 'agregar']);
Route::get('/eliminar/{persona_id}/{mascota_id}',[MascotaController::class, 'eliminar']);

