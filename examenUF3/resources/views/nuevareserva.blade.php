@extends('plantilla')
@section('content')
    <div class="container mb-5">
        <h1 class="text-center">Nueva reserva</h1>


        <form action="{{ route('reserva_insert') }}" method="POST">
            @csrf
            @if (session('success'))
                <h6 class="alert alert-success">{{ session('success') }}</h6>
            @endif
            @error('score')
                <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            {{-- ID MESAS desplegable --}}
            <div class="mb-3">
                <label for="id" class="form-label">Mesa:</label>
                <select name="id" id="id" class="form-control">
                    <option value="" selected disabled>Selecciona una mesa</option>
                    @foreach ($mesas as $mesa)
                        <option value="{{ $mesa->id }}">{{ $mesa->id }}</option>
                    @endforeach
                </select>
                @error('id')
                    <h6 class="alert alert-danger">{{ $message }}</h6>
                @enderror
            </div>
            {{-- ID COMENSALES desplegable --}}
            <div class="mb-3">
                <label class="form-label">Comensal:</label>
                <select name="id" id="id" class="form-control">
                    <option value="" selected disabled>Selecciona un torneo</option>
                    @foreach ($comensales as $comensal)
                        <option value="{{ $comensal->id }}">{{ $comensal->id }}</option>
                    @endforeach
                </select>
                @error('id')
                    <h6 class="alert alert-danger">{{ $message }}</h6>
                @enderror
            </div>
            {{-- ENVIAR --}}
            <button type="submit" class="btn btn-primary">Reservar</button>
        </form>
        <br><br>