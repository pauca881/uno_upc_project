@extends('plantilla')
@section('content')
    <div class="container mb-5">
        <h1 class="text-center">Pagina Insertar Partida</h1>
        {{-- FORMULARIO INSERTAR SCORE Y JUGADOR --}}
        <form action="{{ route('partidas') }}" method="POST">
            @csrf
            @if (session('success'))
                <h6 class="alert alert-success">{{ session('success') }}</h6>
            @endif
            @error('score')
                <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            {{-- ID_PLAYER desplegable --}}
            <div class="mb-3">
                <label for="id_player" class="form-label">Jugador:</label>
                <select name="id_player" id="id_player" class="form-control">
                    <option value="">Selecciona un jugador</option>
                    @foreach ($players as $player)
                        <option value="{{ $player->id }}">{{ $player->name }}</option>
                    @endforeach
                </select>
            </div>
            {{-- SCORE --}}
            <div class="mb-3">
                <label for="score" class="form-label">Puntua al jugador:</label>
                <input type="text" name="score" id="score" class="form-control" name="score" id="score"
                    placeholder="Score">
            </div>
            {{-- ENVIAR --}}
            <button type="submit" class="btn btn-primary">Insertar Score</button>
        </form>
        <br><br>
        {{-- 
        @if (!isset($_POST['partidaMinMax']))
            {{-- FORMULARIO QUE ELIGE JUGADORES ENTRE INTERVALO DE PUNTUACIONES --}}
        {{--
            <form action="{{ route('partidas.min_max')}}" method="POST">
                @csrf
                @if (session('success'))
                    <h6 class="alert alert-success">{{ session('success') }}</h6>
                @endif
                @error('score')
                    <h6 class="alert alert-danger">{{ $message }}</h6>
                @enderror
                {{-- ID_PLAYER desplegable --}}
        {{-- <div class="mb-3">
                    <label for="id_player" class="form-label">Jugador:</label>
                    <select name="id_player" id="id_player" class="form-control">
                        <option value="">Selecciona un jugador</option>
                        @foreach ($players as $player)
                            <option value="{{ $player->id }}">{{ $player->name }}</option>
                        @endforeach
                    </select>
                </div>   --}}
        {{-- SCORE --}}
        {{--
                <div class="mb-3">
                    <label for="scoremin" class="form-label">Puntuación minima:</label>
                    <input type="text" name="scoremin" id="scoremin" class="form-control" name="scoremin" id="scoremin" placeholder="Score min">
                </div>
                <div class="mb-3">
                    <label for="scoremax" class="form-label">Puntuación maxima:</label>
                    <input type="text" name="scoremax" id="scoremax" class="form-control" name="scoremax" id="scoremax" placeholder="Score max">
                </div>
                {{-- ENVIAR --}}
        {{--
                <button type="submit" class="btn btn-primary">Ver score min-max</button>
            </form>
        @else
        
        <br><br>

        {{-- VISUALIZACION DE TABLA MINMAX --}}
        {{--
        <table class="table table-striped">
            <h1>Partidas MinMax</h1>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Score</th>
                    <th>Ganador</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($partidaMinMax as $partida)
                    <tr class="container">
                        <td>{{ $partida->id }}</td>
                        <td>{{ $partida->score }}</td>
                        <td>{{ $partida->id_player }}</td>
                        {{-- <td>{{ $partida-> }}</td> --}}
        {{--
                        <td class="d-flex">
                            <a class="btn btn-primary btn-sm" href="{{ route('partidas-edit', ['id'=> $partida->id]) }}">
                                Editar
                            </a>
                            <form class="d-flex-inline" action="{{ route('partidas-destroy', [$partida->id]) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @endif
        <br><br>
        {{-- VISUALIZACION DE TABLA --}}
        <table class="table table-striped">
            <h1>Partidas Standard</h1>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Score</th>
                    <th>Ganador</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($partidas as $partida)
                    <tr class="container">
                        <td>{{ $partida->id }}</td>
                        <td>{{ $partida->score }}</td>
                        <td>{{ $partida->id_player }}</td>
                        {{-- <td>{{ $partida-> }}</td> --}}
                        <td class="d-flex">
                            <a class="btn btn-primary btn-sm" href="{{ route('partidas-edit', ['id' => $partida->id]) }}">
                                Editar
                            </a>
                            <form class="d-flex-inline" action="{{ route('partidas-destroy', [$partida->id]) }}"
                                method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <br><br><br><br><br>
@endsection
