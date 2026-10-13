@extends('layouts.app')
    @section('content')

        <div class="container-sm">
            <div>
                <a href="{{ route('libros.index') }}" class="btn btn-outline-secondary"><i class="fa fa-arrow-left"></i> Regresar</a>
            </div>
            <br>
            <div class="card">
                <div class="card-header"> 
                    <br>    
                    <h3 class="text-center">Agregar Nuevo libro</h3>
                </div>
                <div class="card-body">
                    {{-- <h4 class="card-title">Title</h4>
                    <p class="card-text">Text</p> --}}
                        <br>
                        {{-- <br> --}}
                        <form class="text-center" action="{{ route('libros.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf {{--  Esto nos permite protegernos de ataques CSRF (Cross-Site Request Forgery) al incluir un token de seguridad en el formulario.  --}}
                                <div class="btn btn-outline-secondary">
                                    <label class="form-label" for="titulo">Nombre:</label>
                                    <input class="form-control" type="text" name="nombre" id="nombre" required>
                                </div>
                                <br> 
                                <br> 
                               
                                <div class="btn btn-outline-secondary" >
                                    <label class="form-label" for="titulo"> Imagen de Portada: </label>
                                    <br>
                                    <input class="form-control" type="file" name="imagen" id="imagen" required>
                                </div>
                                <br>
                                <br>
                              
                                <div class="btn btn-outline-secondary" >
                                    <label class="form-label" for="titulo">Archivo PDF (E-Book):</label>
                                    <br>  
                                    <input class="form-control" type="file" name="archivo" id="archivo" required>
                                </div>
                                <br>
                                <br>
                                <br>
                               
                                
                            <div  class="text-center"> 
                                <button type="submit" class="btn btn-outline-success"><i class="fa-regular fa-floppy-disk"></i> Guardar</button> &nbsp;&nbsp;
                                <a href="{{ route('libros.index') }}" class="btn btn-outline-danger"></i> Cancelar</a>
                            </div>
                            <br>
                        </form>
                    {{-- <a href="{{ route ('libros.index') }}" class="btn btn-info"> << Regresar </a> --}}
                </div>
                <div class="card-footer text-body-secondary">Footer</div>
            </div>
        </div>

    @endsection    