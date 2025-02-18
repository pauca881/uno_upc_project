@extends('plantilla')
@section('content')
    <h1 class="text-center">Pagina Torneos</h1>
    <ul class="list-group">
        <li class="list-group-item">
            <a href="{{ route('datosConsultar') }}">CONSULTAR TORNEOS</a>
        </li>
        <li class="list-group-item">
            <a href="{{ route('datosAñadir') }}">AÑADIR TORNEOS</a>
        </li>
        <li class="list-group-item">
            <a href="{{ route('datosBuscar') }}">BUSCAR TORNEOS</a>
        </li>
        <li class="list-group-item">
            <a href="{{ route('datosModificar') }}">MODIFICAR TORNEOS</a>
        </li>
        <li class="list-group-item">
            <a href="{{ route('datosBorrar') }}">BORRAR TORNEOS</a>
        </li>
    </ul>
@endsection
