@extends('layouts.app')

    @section('content')
      
        <div class="container">
            <div class="card">
                <div class="card-header"><br><a href="{{ route ('libros.create') }}" class="btn btn-info"> Subir un libro </a>
                <br>
                </div>
                    <div class="card-body">
                        {{-- @include('name') --}}
                        <h2 class="text-center">Listado de libros</h2>
                        <br>
                        <table border="1" class="table table-bordered">
                            <tr>
                                <th>Nombre</th> 
                                <th>Imagen</th>
                                <th>Archivo PDF (descargable)</th>
                                <th>ID</th>
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
                                    <td>{{ $libro->id }}</td>  
                                    <td>
                                        {{-- Show,Ver --}}
                                        <a href="{{ route ('libros.show' , $libro ) }}" class="btn btn-info"> Ver </a>
                                        {{-- Editar,Actualizar --}}
                                        <a href="{{ route ('libros.edit' , $libro ) }}" class="btn btn-secondary"> Editar </a> 
                                        {{-- Borrar,Destruir --}}
                                        <form action="{{ route('libros.destroy', $libro->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>

                                    </td> 
                                </tr>
                            @endforeach         
                        </table>                                              
                    </div>
                <div class="card-footer text-body-secondary">Footer</div>
            </div>           
        </div>
        
    @endsection
            
            {{-- @foreach ($libros as $libro)
            <p>{{$libro->nombre}}</p>
@endforeach --}}