@extends('plantilla')
@section('content')
    <h1 class="text-center">Pagina Borrar Jugador</h1>
    <p>Mostrar resultat de la cerca. Resultats: {{ count($datos) }}</p>

    @if (session('success'))
        <h6 class="alert alert-success">{{ session('success') }}</h6>
    @endif

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
                        <td><button type="submit" class="btn btn-primary">Borrar</button></td>
                    </tr>
                </form>
            @endforeach
        </tbody>
    </table>
@endsection
