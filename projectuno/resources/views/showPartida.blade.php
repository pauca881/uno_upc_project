@extends('plantilla')
@section('content')
    <div class="container">
        <form action="{{ route('partidas-update', ['id'=>$partida->id]) }}" method="POST">
            @method('PATCH')
            @csrf
            @if (session('success'))
                <h6 class="alert alert-success">{{ session('success') }}</h6>
            @endif
            @error('title')
                <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            <div class="mb-3">
                <label for="score" class="form-label">Nueva puntuación:</label>
                <input type="text" name="score" id="score" class="form-control" value="{{ $partida->score }}">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
@endsection