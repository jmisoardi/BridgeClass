<?php
use App\Http\Controllers\LibroController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

/* Route::get('/libros', function () {
    return view('Libro.index');
}); */

/* Route::get('/libros', [LibroController::class, 'index']); */

//Creacion de recursos para el CRUD (Create, Read, Update, Delete) de libros
Route::resource('libros', LibroController::class);

/* Route::get('/libros/create', function () {
    return view('Libro.create');
}); */
