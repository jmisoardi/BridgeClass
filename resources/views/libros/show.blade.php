@extends('layouts.app')

    @section('content')

        <div class="container">
            <div>
                <a href="{{ route ('libros.index') }}" class="btn btn-outline-secondary"> <i class="fa fa-arrow-left"></i> Regresar </a>
            </div>
            <br>
            <div class="card">
                <div class="card-header">
                    <br>
                    <h3 class="text-center">Vista de Edicion de libro</h3>
                </div>
                <br>
                    <div class="text-center" class="card-body">
                        <h2>{{ $libro->nombre }}</h2>
                        <br>                        
                    
                        <img src="{{ asset('storage/imagenes/' . $libro->imagen) }}" width="350px"> &nbsp;&nbsp;&nbsp; <a class="btn btn-light " href="{{ asset('storage/archivos/'.$libro->archivo) }}"><i class="fa fa-file-arrow-down"></i>  {{ $libro->archivo }}</a>
                        <br>
                        <br>
                        <br>
                        <br>
                        {{-- <a class="btn btn-outline-secondary btn-sm" href="{{ asset('storage/archivos/'.$libro->archivo) }}"><i class="fa fa-file-arrow-down"></i>{{ $libro->archivo }}</a> --}}
                        <br>
                        <br>
                        <br>
                        {{-- <h2>{{ $libro->archivo }}</h2> --}}
                    </div>
                
                    <br>
                <div class="card-footer text-body-secondary">
                    <br>
                    {{-- <a href="{{ route ('libros.index') }}" class="btn btn-secondary"> << Regresar </a> --}}
                </div>
            </div>
        </div>

        
    
    @endsection        
