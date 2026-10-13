@extends('layouts.app')

    @section('content')
        <div class="container">
            <div><a href="{{ route('libros.index') }}" class="btn btn-outline-secondary"><i class="fa fa-arrow-left"></i> Regresar</a></div>
            <br>
            <div class="card">
                {{-- <div class="card-header">Header</div> --}}
                
                <div class="card-header">
                    <br>
                    <h3 class="text-center" >Vista de Edicion de libro</h3>
                </div>
              {{--   <br> --}}
                <div class="text-center" class="card-body">
                    <br>                
                    <form action="{{ route('libros.update', $libro) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="btn btn-outline-secondary">
                           {{--  <br> --}}
                            <label class="form-label" for="nombre"><h5>Nombre:</h5></label> &nbsp;
                            <br>
                            <input class="form-control" type="text" name="nombre" value="{{ $libro->nombre }}" required>
                        </div>
                        <br>
                        <br>
                        <img src="{{ asset('storage/imagenes/' . $libro->imagen) }}" width="350px">
                        <br>
                        <br>
                        <div class="btn btn-outline-secondary">
                            <label class="form-label" for="imagen"><h5>Imagen de Portada:</h5></label>
                            <br>
                            <input class="form-control" type="file" name="imagen">                                                        
                        </div>
                        <br> 
                        {{-- &nbsp;{{ $libro->imagen }}&nbsp; --}}
                        <br>
                        <div class="btn btn-outline-secondary">
                            <label class="form-label" for="archivo"><h5>Archivo Pdf (E-Book):</h5></label>
                            <br>                            
                            {{ $libro->archivo }}&nbsp;
                            <br>
                            <br>
                            <input class="form-control" type="file" name="archivo">
                        </div>
                        <br>
                        <br>
                        <br>
                        <div class=text-center>
                            <button type="submit" class="btn btn-outline-warning">Actualizar</button> &nbsp;&nbsp;
                            <button class="btn btn-outline-danger" type="submit" href="{{ route('libros.index') }}">Cancelar</button>
                        </div>    
                        <br>
                    </form>                
                </div>
                <div class="card-footer text-body-secondary"> 
                    <br>
            
                    <br>
                </div>
            </div>
        </div>
        
        
    
    @endsection

