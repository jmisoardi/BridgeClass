@extends('layouts.app')
    @section('content')
        <h1>Agregar Nuevo libro</h1>

            <form action="{{ route('libros.store')}}" method="POST" enctype="multipart/form-data">
                @csrf {{--  Esto nos permite protegernos de ataques CSRF (Cross-Site Request Forgery) al incluir un token de seguridad en el formulario.  --}}
                
                    <label for="titulo">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" required>
                    <br>
                    <br>
                    <label for="titulo"> Imagen de Portada: </label>
                    <input type="file" name="imagen" id="imagen" required>
                    <br>
                    <br>
                    <label for="titulo ">Archivo PDF (E-Book):</label>
                    <input type="file" name="archivo" id="archivo" required>
                    <br>
                    <br>

                <button type="submit" class="btn btn-primary">Guardar</button>

            </form>
        <a href="{{ route ('libros.index') }}" class="btn btn-info"> << Regresar </a>
    @endsection    