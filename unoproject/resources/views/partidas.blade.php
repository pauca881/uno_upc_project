@extends('plantilla')
@section('content')
<h1 class="text-center">Pagina Insertar Partida</h1>
<form action="{{ route('datosInsertar')}}" method="POST">
    @csrf
    @if (session('success'))
        <h6 class="alert alert-success">{{ session('success') }}</h6>
    @endif
    {{-- SCORE --}}
    <div class="mb-3">
        <label for="score" class="form-label">Nombre:</label>
        <input type="text" class="form-control" name="score" id="score" placeholder="Score">
    </div>
    {{-- ENVIAR --}}
    <button type="submit" class="btn btn-primary">Insertar Score</button>
</form>
@endsection
