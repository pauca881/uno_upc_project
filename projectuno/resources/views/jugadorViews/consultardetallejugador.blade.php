@extends('plantilla')
@section('content')
    <h1 class="text-center">Pagina Consultar Detalle Jugador</h1>
    @if (count($datos)==0)
    <div class="alert alert-info"> Error en los datos.</div>
    
    @else
    <div class="mx-auto" style="width: 800px;">
    <table class="table table-bordered">
        <tr class="table  text-center">
            <th colspan="2">DATOS</th>
            <th rowspan="5" > <img src="{{ URL::asset('img/dog.png') }}" width="300em"> </th>
        </tr>
        
        <tr>
            <td>ID</td>
            <td class="text-center">{{ $datos[0]->id }}</td>
        </tr>
        <tr>
            <td>NOMBRE</td>
            <td class="text-center">{{ $datos[0]->name }}</td>
        </tr>
        <tr>
            <td>APELLIDO</td>
            <td class="text-center">{{ $datos[0]->surname }}</td>
        </tr>
        <tr>
            <td>USUARIO</td>
            <td class="text-center">{{ $datos[0]->username }}</td>
        </tr>
        
    </table>
    </div>
    @endif
@endsection
