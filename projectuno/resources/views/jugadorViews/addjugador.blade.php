@extends('plantilla')
@section('content')
    <h1 class="text-center">Pagina Añadir Jugador</h1>
    <form class="container" action="{{ route('datosAñadirJ') }}" method="POST">
        @csrf
        @if (session('success'))
            <h6 class="alert alert-success">{{ session('success') }}</h6>
        @endif

        {{-- ID --}}
        <div class="mb-3">
            <label for="id" class="form-label">ID:</label>
            <input type="number" class="form-control" name="id" id="id">
        </div>
        @error('id')
            <h6 class="alert alert-danger">{{ $message }}</h6>
        @enderror

        {{-- NOMBRE --}}
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
        </div>
        @error('nombre')
            <h6 class="alert alert-danger">{{ $message }}</h6>
        @enderror


        {{-- APELLIDO --}}
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido:</label>
            <input type="text" class="form-control" id="apellido" name="apellido">
        </div>
        @error('apellido')
            <h6 class="alert alert-danger">{{ $message }}</h6>
        @enderror

        {{-- USUARIO --}}
        <div class="mb-3">
            <label for="usuario" class="form-label">Usuario:</label>
            <input type="text" class="form-control" id="usuario" name="usuario">
        </div>
        @error('usuario')
            <h6 class="alert alert-danger">{{ $message }}</h6>
        @enderror


        {{-- ENVIAR --}}
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
