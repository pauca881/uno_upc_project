@extends('plantilla')
@section('content')
    <h1 class="text-center">Pagina Consultar Torneo</h1>
    <ul class="list-group">
        @foreach ($datos as $i)
        <li class="list-group-item"><a href="/consultartorneo/{{ $i->id }}">{{ $i->name }}</a></li>
        @endforeach
      </ul>
@endsection
