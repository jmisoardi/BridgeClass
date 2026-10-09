@extends('layouts.app')

    @section('content')

        <div class="container">
            <div class="card">
                
                <div class="card-header"><a href="{{ route ('libros.index') }}" class="btn btn-secondary"> << Regresar </a></div>
                <br>
                <div class="text-center"><h2>Vista de Edicion de libro</h2></div>
                
                    <div class="card-body">
                    
                        <h2>{{ $libro->nombre }}</h2>
                        <br>
                        
                        <img src="{{ asset('storage/imagenes/' . $libro->imagen) }}" width="100px">
                        <br>
                        <br>
                        <br>
                        <h2>{{ $libro->archivo }}</h2>

                        
                    </div>
                    <br>
                <div class="card-footer text-body-secondary">
                    <br>
                    {{-- <a href="{{ route ('libros.index') }}" class="btn btn-secondary"> << Regresar </a> --}}
                </div>
            </div>
        </div>

        
    
    @endsection        
