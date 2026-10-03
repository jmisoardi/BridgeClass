
Vista de Listados de libros 

@@include('name')

<h1>Listado de libros</h1>

    <table border="1">
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
                    <a href="{{ route ('libros.show','$libro->id' ) }}" >Ver</a>
                    <a href="{{ route ('libros.edit','$libro->id' ) }}" >Editar</a>
                    
                    <form action="{{ route('libros.destroy', $libro->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                </td> 
            </tr>
        @endforeach



    </table>


{{-- @foreach ($libros as $libro)
    <p>{{$libro->nombre}}</p>
@endforeach --}}