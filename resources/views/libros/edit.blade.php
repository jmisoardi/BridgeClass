@extends('layouts.app')

    @section('content')
        <div class="container">
            <div class="card">
                {{-- <div class="card-header">Header</div> --}}
                
                <div class="card-header"><a href="{{ route('libros.index') }}" class="btn btn-secondary"> << Regresar</a></div>
                <br>
                <div class="text-center"><h2>Vista de Edicion de libro</h2></div>
                
                <div class="card-body">
                    <br>                
                    <form action="{{ route('libros.update', $libro) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <label for="nombre"><h5>Nombre:</h5></label> &nbsp;
                        <input type="text" name="nombre" value="{{ $libro->nombre }}" required>
                        <br>
                        <br>
                        <label for="imagen"><h5>Imagen de Portada:</h5></label> 
                        <br>
                        <br>
                        <img src="{{ asset('storage/imagenes/' . $libro->imagen) }}" width="100px">
                        <br>
                        <br>
                        {{-- &nbsp;{{ $libro->imagen }}&nbsp; --}}
                        <input type="file" name="imagen">
                        <br>
                        <br>
                        <label for="archivo"><h5>Archivo Pdf (E-Book)</h5></label>
                        <br>
                        <br>
                         &nbsp;{{ $libro->archivo }}&nbsp;
                        <br>
                        <br>
                        <input type="file" name="archivo">
                        <br>
                        <br>
                        <br>
                        <div class=text-center>
                            
                            <button type="submit" class="btn btn-warning">Actualizar</button>
                        </div>    
                    </form>
                    
                </div>
                <div class="card-footer text-body-secondary"> 
                    <br>
                    
                    <br>
                </div>
            </div>
        </div>
        
        
    
    @endsection

