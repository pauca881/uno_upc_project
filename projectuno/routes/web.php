<?php

namespace App\Http\Controllers; 
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

Route::get('/jugadores', function () {
    return view('jugadorViews.jugadores');
})->name('jugadores');

Route::get('/partidas', function () {
    return view('partidas');
})->name('partidas');

Route::get('/torneos', function () {
    return view('torneoViews.torneos');
})->name('torneos');


//PROTEGIR RUTES AMB MIDDLEWARE
// Route::get('/home', function () {
//     return view('home');
// })->middleware('auth')->name('home');

//RUTAS LOGIN

// Ruta para el formulario de login
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');

// Ruta para procesar el login
Route::post('login', [LoginController::class, 'login'])->name('login');

// Ruta para cerrar sesión
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

//RUTAS REGISTRO

// // Ruta para mostrar el formulario de registro
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');

// Ruta para procesar el formulario de registro
Route::post('register', [RegisterController::class, 'register']);






//RUTAS JUGADORES
Route::get('/addjugador',[playercontroller::class, 'f_formulari'])->name('datosAñadirJ');
Route::post('/addjugador', [playercontroller::class, 'f_add'])->name('datosAñadirJ');

Route::get('/consultarjugador', [playercontroller::class, 'f_consultar'])->name('datosConsultarJ');
Route::get('/consultarjugador/{fila}', [playercontroller::class, 'f_consultardetalle'])->name('datosConsultarJ-detalle');

Route::get('/modificarjugador',[playercontroller::class, 'f_modificar'])->name('datosModificarJ');
Route::get('/modificarjugador/{fila}',[playercontroller::class, 'f_modificarfila'])->name('datosModificarfilaJ');
Route::patch('/modificarjugador/{fila}',[playercontroller::class, 'f_actualitzarfila'])->name('datosActualitzarfilaJ');

Route::get('/borrarjugador', [playercontroller::class, 'f_borrar'])->name('datosBorrarJ');
Route::delete('/borrarjugador/{fila}',[playercontroller::class, 'f_borrarfila'])->name('datosBorrarfilaJ');


//RUTAS TORNEO
Route::get('/addtorneo',[torneocontroller::class, 'f_formulari'])->name('datosAñadir');
Route::post('/addtorneo', [torneocontroller::class, 'f_add'])->name('datosAñadir');

Route::get('/buscartorneo', function () {
    return view('torneoViews.buscartorneo');
})->name('datosBuscar');
Route::post('/buscartorneo', [torneocontroller::class, 'f_buscar'])->name('datosBuscar-post');

Route::get('/consultartorneo', [torneocontroller::class, 'f_consultar'])->name('datosConsultar');
Route::get('/consultartorneo/{fila}', [torneocontroller::class, 'f_consultardetalle'])->name('datosConsultar-detalle');

Route::get('/modificartorneo',[torneocontroller::class, 'f_modificar'])->name('datosModificar');
Route::get('/modificartorneo/{fila}',[torneocontroller::class, 'f_modificarfila'])->name('datosModificarfila');
Route::patch('/modificartorneo/{fila}',[torneocontroller::class, 'f_actualitzarfila'])->name('datosActualitzarfila');

Route::get('/borrartorneo', [torneocontroller::class, 'f_borrar'])->name('datosBorrar');
Route::delete('/borrartorneo/{fila}',[torneocontroller::class, 'f_borrarfila'])->name('datosBorrarfila');




//RUTAS PARTIDAS
//Create(insertar)
Route::get('/partidas', [partidacontroller::class, 'index'])->name('partidas');
Route::post('/partidas', [partidacontroller::class, 'store'])->name('partidas');
// Route::post('/partidas', [partidacontroller::class, 'minmax'])->name('partidas.min_max');

Route::get('/partidas/{id}', [partidacontroller::class, 'show'])->name('partidas-edit');
Route::patch('/partidas/{id}', [partidacontroller::class, 'update'])->name('partidas-update');
Route::delete('/partidas/{id}', [partidacontroller::class, 'destroy'])->name('partidas-destroy');
// Route::GET('/partidas', [partidacontroller::class, 'f_formulario'])->name('datosInsertar');
// Route::POST('/partidas', [partidacontroller::class, 'f_insertPartida'])->name('datosInsertar');
//Read(consultar)
// Route::GET('consultar', [partidacontroller::class, 'f_consultarPartida'])->name('datosConsultar');
// Route::GET('consultar/{fila}', [partidacontroller]::class, 'f_consultarDetalle')->name('datosConsultar')
//Update(modificar)
// Route::PATH('update' [partidacontroller::class, '])
//Delete




// RUTAS JUGADORES-TORNEOS
Route::get('/jugadortorneo', [relacionnmcontroller::class, 'listAll'])->name('jugadortorneo');

Route::post('/jugadortorneo', [relacionnmcontroller::class, 'insert'])->name('jugadortorneo_insert');

Route::delete('/jugadortorneo', [relacionnmcontroller::class, 'delete'])->name('playertorneo_delete');

?>