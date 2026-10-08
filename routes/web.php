<?php
use App\Http\Controllers\LibroController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

/* Route::get('/libros', function () {
    return view('Libro.index');
}); */

/* Route::get('/libros', [LibroController::class, 'index']); */

//Creacion de recursos para el CRUD (Create, Read, Update, Delete) de libros
Route::resource('libros', LibroController::class)->middleware('auth');
/* middleware('auth'); //Se agrega el middleware de autenticación para proteger las rutas del CRUD de libros */

/* Route::get('/libros/create', function () {
    return view('Libro.create');
}); */

Auth::routes([/* 'register' => false, */ 'reset' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


