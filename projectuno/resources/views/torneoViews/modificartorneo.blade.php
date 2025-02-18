@extends('plantilla')
@section('content')
    <h1 class="text-center">Pagina Modificar Torneo</h1>
    <p>Mostrar resultat de la cerca. Resultats: {{ count($datos) }}</p>
    <table class="table table-striped">
        <thead>
            <tr class="table-dark">
                <th>ID</th>
                <th>NOMBRE</th>
                <th>DESCRIPCIÓN</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datos as $i)
                <form action="/borrartorneo/{{ $i->id }}" method="POST">
                    @csrf
                    <tr>
                        <td>{{ $i->id }}</td>
                        <td>{{ $i->name }}</td>
                        <td>{{ $i->description }}</td>
                        <td><a class="btn btn-primary" href="/modificartorneo/{{ $i->id }}">Modificar</a></td>
                    </tr>
                </form>
            @endforeach
        </tbody>
    </table>
@endsection
