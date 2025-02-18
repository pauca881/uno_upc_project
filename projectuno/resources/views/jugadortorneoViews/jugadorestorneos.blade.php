@extends('plantilla')
@section('content')
    <div class="container mb-5">
        <h1 class="text-center">INSCRIPCIÓN A TORNEOS</h1>
        {{-- FORMULARIO INSERTAR SCORE Y JUGADOR --}}
        <form action="{{ route('jugadortorneo_insert') }}" method="POST">
            @csrf
            @if (session('success'))
                <h6 class="alert alert-success">{{ session('success') }}</h6>
            @endif
            @error('score')
                <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            {{-- ID_PLAYER desplegable --}}
            <div class="mb-3">
                <label for="player_id" class="form-label">Jugador:</label>
                <select name="player_id" id="player_id" class="form-control">
                    <option value="" selected disabled>Selecciona un jugador</option>
                    @foreach ($players as $player)
                        <option value="{{ $player->id }}">{{ $player->name }}</option>
                    @endforeach
                </select>
                @error('player_id')
                    <h6 class="alert alert-danger">{{ $message }}</h6>
                @enderror
            </div>
            {{-- ID_TORNEO desplegable --}}
            <div class="mb-3">
                <label for="torneo_id" class="form-label">Torneo:</label>
                <select name="torneo_id" id="torneo_id" class="form-control">
                    <option value="" selected disabled>Selecciona un torneo</option>
                    @foreach ($torneos as $torneo)
                        <option value="{{ $torneo->id }}">{{ $torneo->name }}</option>
                    @endforeach
                </select>
                @error('torneo_id')
                    <h6 class="alert alert-danger">{{ $message }}</h6>
                @enderror
            </div>
            {{-- ENVIAR --}}
            <button type="submit" class="btn btn-primary">Inscribirse</button>
        </form>
        <br><br>

        {{-- VISUALIZACION DE TABLA --}}
        <table class="table table-striped">
            <h1>Inscripciones</h1>
            <thead>
                <tr>
                    <th>ID Player</th>
                    <th>Player Name</th>
                    <th>ID Torneo</th>
                    <th>Torneo Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dades as $dada)
                    @foreach ($dada->torneos as $torneo)
                        <tr class="container">
                            <td>{{ $dada->id }}</td>
                            <td>{{ $dada->name }}</td>
                            <td>{{ $torneo->id }}</td>
                            <td>{{ $torneo->name }}</td>
                            {{-- <td>{{ $partida-> }}</td> --}}
                            <td class="d-flex">
                                <form class="d-flex-inline" action="{{ route('playertorneo_delete') }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <input type=hidden name=id_player value={{ $dada->id }}>
                                    <input type=hidden name=id_torneo value={{ $torneo->id }}>
                                    <button class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </div>
    <br><br><br><br><br>
@endsection
