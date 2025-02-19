<h4>Listado menus</h4>

@extends('plantilla')
@section('content')
    <h1 class="text-center">Pagina Listar menus</h1>
    <ul class="list-group">
        @foreach ($menus as $i)
            <li class="list-group-item">{{ $i->nombre }}</li>
            <p> <a href="/modificarmenu/{{ $i->id }}">Modificar menu</a></p>
            <!-- <li class="list-group-item"><a href="/modificarmenu/{{ $i->id }}">{{ $i->nombre }}</a></li> -->

        @endforeach
    </ul><br><br><br><br><br><br><br>
@endsection
