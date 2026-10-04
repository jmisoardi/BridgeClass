<h3>Estamos en show.blade.php</h3>

<h2>{{ $libro->nombre }}</h2>

<img src="{{ asset('storage/imagenes/' . $libro->imagen) }}" width="100px">

<h2>{{ $libro->archivo }}</h2>

