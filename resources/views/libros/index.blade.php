{{-- @extends('layouts.app') --}}

<h3>Listados de Libros</h3>

<br><a href="{{ route ('libros.create') }}" class="btn btn-info"> Subir un libro </a>


{{-- @include('name') --}}

<h1>Listado de libros</h1>

{{-- @section('contenido') --}}
    <table border="3">
            <tr>
                <th>Nombre</th> 
                <th>Imagen</th>
                <th>Archivo PDF (descargable)</th>
                <th>Acciones</th>
            </tr>
            
            @foreach ($libros as $libro)
                <tr>
                    <td>{{ $libro->nombre }}</td>
                    
                    <td>{{-- {{ $libro->imagen }} --}}{{--  Este codigo me muestra el nombre del archivo de la imagen en la vista de listado de libros, pero no me muestra la imagen en sí. Para mostrar la imagen, se puede usar el siguiente código: --}}
                         {{-- Esto me muestra la imagen en la vista de listado de libros, pero no la muestra en la vista de edición. Para mostrarla en la vista de edición, se puede usar el siguiente código: --}}
                        <img src="{{ asset('storage/imagenes/' . $libro->imagen) }}" width="100px">
                    </td>
                    
                    <td>{{ $libro->archivo }}</td>

                    <td>
                        {{ $libro->id }}
                        <a href="{{ route ('libros.show' , $libro ) }}" class="btn btn-info"> Ver </a>
                        <a href="{{ route ('libros.edit' , $libro ) }}" class="btn btn-secondary"> Editar </a> 
                        
                        <form action="{{ route('libros.destroy', $libro->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                    </td> 
                </tr>
            @endforeach
            
        </table>
        
{{-- @endsection --}}

{{-- @foreach ($libros as $libro)
    <p>{{$libro->nombre}}</p>
@endforeach --}}