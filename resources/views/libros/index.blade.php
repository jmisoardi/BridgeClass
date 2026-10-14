@extends('layouts.app')

    @section('content')
      
        <div class="container">
            <div class="card">
                <div class="card-header"><br>
                    <h2 class="text-center">Listado de libros</h2>
                </div>
                <div class="card-body">
                    {{-- @include('name') --}}
                    <a href="{{ route ('libros.create') }}" class="btn btn-outline-secondary"> 
                        <i class="fa fa-file-arrow-up"></i
                            > Subir un libro </a>
                        <br>
                        <br>
                        <table  border="1" class="table table-bordered">
                            <tr class="text-center" >
                                <th>Nombre</th> 
                                <th>Imagen</th>
                                <th>Archivo PDF (descargable)</th>
                                {{-- <th>ID</th> --}}
                                <th>Acciones</th>
                            </tr>
                            
                            @foreach ($libros as $libro)
                                <tr>
                                    <td class="text-center">
                                        <br>{{ $libro->nombre }}
                                    </td>
                                    <td class="text-center" >{{-- {{ $libro->imagen }} --}}{{--  Este codigo me muestra el nombre del archivo de la imagen en la vista de listado de libros, pero no me muestra la imagen en sí. Para mostrar la imagen, se puede usar el siguiente código: --}}
                                        {{-- Esto me muestra la imagen en la vista de listado de libros, pero no la muestra en la vista de edición. Para mostrarla en la vista de edición, se puede usar el siguiente código: --}}
                                        <img src="{{ asset('storage/imagenes/' . $libro->imagen) }}" width="120px">
                                    </td>
                                    <td class="text-center">
                                        <br>
                                        <a class="btn btn-outline-secondary btn-sm" href="{{ asset('storage/archivos/'.$libro->archivo) }}" download><i class="fa fa-file-arrow-down"></i> Descargar PDF</a>
                                       {{--  {{ $libro->archivo }} --}}
                                    </td>
                                    {{-- <td>{{ $libro->id }}</td>   --}}
                                    <td class="text-center" ><br>
                                        {{-- Show,Ver --}}
                                        <a href="{{ route ('libros.show' , $libro ) }}" class="btn btn-outline-info btn-sm">  <i class="fa fa-eye"></i> Ver </a>
                                        {{-- Editar,Actualizar --}}
                                        <a href="{{ route ('libros.edit' , $libro ) }}" class="btn btn-outline-warning btn-sm"> <i class="fa fa-pen"></i> Editar </a> 
                                        {{-- Borrar,Destruir --}}
                                        <form class="d-inline-block" action="{{ route('libros.destroy', $libro->id) }}" method="POST" {{-- style="display: inline-block;" --}}>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash"></i> Eliminar</button>
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