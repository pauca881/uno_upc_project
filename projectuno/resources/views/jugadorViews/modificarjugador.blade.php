@extends('plantilla')
@section('content')
    <h1 class="text-center">Pagina Modificar Jugador</h1>
    <p>Mostrar resultat de la cerca. Resultats: {{ count($datos) }}</p>
    <table class="table table-striped">
        <thead>
            <tr class="table-dark">
                <th>ID</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>USUARIO</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datos as $i)
                <form action="/borrarjugador/{{ $i->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <tr>
                        <td>{{ $i->id }}</td>
                        <td>{{ $i->name }}</td>
                        <td>{{ $i->surname }}</td>
                        <td>{{ $i->username }}</td>
                        <td><a class="btn btn-primary" href="/modificarjugador/{{ $i->id }}">Modificar</a></td>
                    </tr>
                </form>
            @endforeach
        </tbody>
    </table>
@endsection