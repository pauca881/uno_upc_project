@extends('plantilla')
@section('content')
    <h1 class="text-center">Pagina Resultado Menus</h1>
    <div class="mx-auto" style="width: 400px;">
        <h3>{{ session('success') }}</h3>
        @if (count($datos) == 0)
            <h3>Mostrar resultat de la cerca</h3>
            <p>sense resultats</p>
        @else
            <h3>Mostrar resultat de la cerca. Resultats: {{ count($datos) }}</h3>
            @foreach ($datos as $i)
                <table class="table table-bordered">
                    <tr class="table  text-center">
                        <th colspan="2">DATOS</th>
                        <th rowspan="4"> <img src="{{ URL::asset('img/dog.png') }}" width="300em"> </th>
                    </tr>

                    <tr>
                        <td>ID</td>
                        <td class="text-center">{{ $datos[0]->id }}</td>
                    </tr>
                    <tr>
                        <td>NOMBRE</td>
                        <td class="text-center">{{ $datos[0]->nombre }}</td>
                    </tr>
                    <tr>
                        <td>DSCRIPCIÓN</td>
                        <td class="text-center">{{ $datos[0]->descripcion }}</td>
                    </tr>
                    <tr>
                        <td>PRECIO</td>
                        <td class="text-center">{{ $datos[0]->precio }}</td>
                    </tr>
                </table>
            @endforeach
        @endif
    </div>
@endsection