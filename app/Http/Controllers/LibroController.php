<?php

namespace App\Http\Controllers;
use App\Models\Libro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LibroController extends Controller
{
    //
    public function index()
    {
        $libros = Libro::all();
        return view('libros.index', compact('libros')); //compact('libros') es una forma de pasar la variable $libros a la vista, para que pueda ser utilizada en la misma.
    }
    public function create()
    {
        return view('libros.create');
    }
    
    public function store(Request $request){

        $datos = request()->all();

        $nombre = $request -> nombre;
        $imagenRuta = $request ->file('imagen')->store('imagenes', 'public');
        $archivoRuta = $request ->file('archivo')->store('archivos', 'public');
        
        /* $_imagen = $imagen->getClientOriginalName(); 
        $_archivo = $archivo->getClientOriginalName(); */ //Sirve para obtener el nombre original del archivo cargado, pero no es necesario si estamos almacenando los archivos en el almacenamiento público de Laravel.

        $libro = new Libro(); 
        $libro->nombre = $nombre;
        $libro->imagen = basename($imagenRuta);
        $libro->archivo = basename($archivoRuta); 
        $libro->save();

        /* return response()->json($datos); */ /* Esto nos permite ver los datos que se están enviando desde el formulario en formato JSON, lo cual es útil para depuración y verificación de los datos antes de guardarlos en la base de datos. */

        return redirect()->route('libros.index');
    }
    
    public function show(libro $libro){
        return view('libros.show',compact('libro'));
    }
    
    public function edit(libro $libro){

        return view('libros.edit', compact('libro'));
    }
    
    public function update(Request $request,libro $libro){

        $libro->nombre = $request->nombre;
        if ($request->hasFile('imagen')) {
            // Eliminar la imagen anterior si existe
            if (Storage::disk('public')->exists('imagenes/' . $libro->imagen)) {
                Storage::disk('public')->delete('imagenes/' . $libro->imagen);   
            }
            // Guardar la nueva imagen
            $imagenRuta = $request->file('imagen')->store('imagenes', 'public');
            $libro->imagen = basename($imagenRuta);
        }
        if ($request->hasFile('archivo')) {
            // Eliminar el archivo anterior si existe
            if (Storage::disk('public')->exists('archivos/' . $libro->archivo)) {
                Storage::disk('public')->delete('archivos/' . $libro->archivo);   
            }
            // Guardar el nuevo archivo
            $archivoRuta = $request->file('archivo')->store('archivos', 'public');
            $libro->archivo = basename($archivoRuta);
        }
        $libro->save();

        return redirect()->route('libros.index');
    }

    public function destroy(libro $libro){
        
        // Eliminar la imagen asociada al libro si existe
        if (Storage::disk('public')->exists('imagenes/' . $libro->imagen)) {
            Storage::disk('public')->delete('imagenes/' . $libro->imagen);   
        };
        // Eliminar el archivo asociado al libro si existe
        if (Storage::disk('public')->exists('archivos/' . $libro->archivo)) {
            Storage::disk('public')->delete('archivos/' . $libro->archivo);   
        };

        $libro->delete();
        return redirect()->route('libros.index');
    }
}
