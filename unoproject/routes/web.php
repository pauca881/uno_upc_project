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
    return view('jugadores');
})->name('jugadores');

Route::get('/partidas', function () {
    return view('partidas');
})->name('partidas');

Route::get('/torneos', function () {
    return view('torneos');
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




//RUTAS TORNEO
// Route::get('/addtorneo',[torneocontroller::class, 'f_formulari'])->name('datosAñadir');
// Route::post('/addtorneo', [torneocontroller::class, 'f_add'])->name('datosAñadir');




//RUTAS PARTIDAS
//Create(insertar)
//Route::GET('/insert', [partidacontroller::class, 'f_formulario'])->name(datosInsertar);
//Route::POST('/insert', [partidacontroller::class, 'f_insertPartida'])->name('datosInsertar');
//Read(consultar)
//Route::GET('consultar', [partidacontroller::class, 'f_consultarPartida'])->name('datosConsultar');
//Route::GET('consultar/{fila}. [partidacontroler]::class', 'f_consultarDetalle')->name('datosConsultar')
//Update(modificar)
//Route::PATH('update' [partidacontroller::class, '])
//Delete

?>