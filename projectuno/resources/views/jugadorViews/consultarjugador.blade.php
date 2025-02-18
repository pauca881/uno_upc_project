@extends('plantilla')
@section('content')
    <h1 class="text-center">Pagina Consultar Jugador</h1>
    <ul class="list-group">
        @foreach ($datos as $i)
            <li class="list-group-item"><a href="/consultarjugador/{{ $i->id }}">{{ $i->name }}</a></li>
        @endforeach
    </ul><br><br><br><br><br><br><br>
@endsection
