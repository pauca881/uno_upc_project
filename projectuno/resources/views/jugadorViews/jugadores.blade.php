@extends('plantilla')
@section('content')
    <h1 class="text-center">Pagina Jugadores</h1>
    <ul class="list-group">
        <li class="list-group-item">
            <a href="{{ route('datosConsultarJ') }}">CONSULTAR JUGADORES</a>
        </li>
        <li class="list-group-item">
            <a href="{{ route('datosAñadirJ') }}">AÑADIR JUGADORES</a>
        </li>
        <li class="list-group-item">
            <a href="{{ route('datosModificarJ') }}">MODIFICAR JUGADORES</a>
        </li>
        <li class="list-group-item">
            <a href="{{ route('datosBorrarJ') }}">BORRAR JUGADORES</a>
        </li>
    </ul>
@endsection