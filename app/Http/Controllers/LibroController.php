<?php

namespace App\Http\Controllers;
use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    //
    public function index()
    {
        return view('libros.index');
    }
    public function create()
    {
        return view('libros.create');
    }
    
    public function store(Request $request){

        $datos = request()->all();

        $nombre = $request -> nombre;
        $imagen = $request ->file('imagen');
        $archivo = $request ->file('archivo');
        
        $_imagen = $imagen->getClientOriginalName();
        $_archivo = $archivo->getClientOriginalName();

        $libro = new Libro(); 
        $libro->nombre = $nombre;
        $libro->imagen = $_imagen;
        $libro->archivo = $_archivo;
        $libro->save();

        return response()->json($datos); /* Esto nos permite ver los datos que se están enviando desde el formulario en formato JSON, lo cual es útil para depuración y verificación de los datos antes de guardarlos en la base de datos. */

        /* return redirect()->route('libros.index'); */
    }
    
    public function show($id){
        return view('libros.show');
    }
    
    public function edit($id){
        return view('libros.edit');
    }
    
    public function update(Request $request, $id){
        return redirect()->route('libros.index');
    }

    public function destroy($id){
        return redirect()->route('libros.index');
    }
}
