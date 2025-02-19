<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ComensalController;
use App\Http\Controllers\ReservarMesaController;


Route::get('/', function () {
    return view('inicio');
});

Route::get('/listarmenu', function () {
    return view('listarmenu');
})->name('listarmenu');

Route::get('/buscarmenu', function () {
    return view('buscarmenu');
})->name('buscarmenu');

Route::get('/buscarcomensales', function () {
    return view('buscarcomensales');
})->name('buscarcomensales');


//listarmenus
Route::get('/listarmenu',[MenuController::class, 'index'])->name('listarmenu');

Route::get('/modificarmenu/{fila}',[MenuController::class, 'f_modificarfila'])->name('datosModificarfila');
Route::patch('/modificarmenu/{fila}',[MenuController::class, 'f_actualitzarfila'])->name('datosActualitzarfila');


//buscarmenu
Route::post('/buscarmenu', [MenuController::class, 'f_buscar'])->name('datosBuscar-post');


//buscarcomensales
Route::post('/buscarcomensales', [ComensalController::class, 'f_buscar'])->name('datosBuscar-post');


Route::get('/nuevareserva',[ReservarMesaController::class, 'f_formulari'])->name('nuevareserva');
Route::post('/nuevareserva', [ReservarMesaController::class, 'f_add'])->name('reserva_insert');
