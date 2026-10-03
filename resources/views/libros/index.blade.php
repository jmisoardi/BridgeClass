{{-- @extends('layouts.app') --}}



<h3>Vista de Listados de Libros</h3>

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
                    <td>{{ $libro->imagen }}</td>
                    <td>{{ $libro->archivo }}</td>
                    <td>
                        {{ $libro->id }}
                        <a href="{{ route ('libros.show' , $libro->id ) }}" class="btn btn-info"> Ver </a>
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