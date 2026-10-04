{{-- @extends('layouts.app') --}}

   {{--  @section('contenido') --}}

        <h4> Vista de Edición de libros</h4>  

        <form action="{{ route('libros.update', $libro) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" value="{{ $libro->nombre }}" required>
            <br>
            <br>
            <label for="imagen">Imagen de Portada:</label> 
            <br>
            <br>
            <img src="{{ asset('storage/imagenes/' . $libro->imagen) }}" width="100px">
            <br>
            <br>
            {{-- &nbsp;{{ $libro->imagen }}&nbsp; --}}
            <input type="file" name="imagen">
            <br>
            <br>
            <label for="archivo">Archivo PDF (E-Book):</label> &nbsp;{{ $libro->archivo }}&nbsp;
            <input type="file" name="archivo">
            <br>
            <br>

            <button type="submit" class="btn btn-primary">Actualizar</button>
            
        </form>

        <a href="{{ route('libros.index') }}" class="btn btn-secondary">Regresar</a>
    
   {{--  @endsection --}}

