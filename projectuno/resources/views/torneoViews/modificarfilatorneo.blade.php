@extends('plantilla')
@section('content')
    <h1 class="text-center">Pagina Modificar Torneo</h1>
    <div class="mb-3">
        <form action="{{ route('datosActualitzarfila', $fila[0]->id) }}" method="POST">
            @csrf
            @method('PATCH')
            @if (session('success'))
                <h6 class="alert alert-success">{{ session('success') }}</h6>
            @endif

            {{-- ID --}}
            <label for="" class="form-label">ID:</label>
            <input type="text" class="form-control" name="id" id="" aria-describedby="helpId"
                value="{{ $fila[0]->id }}" readonly>
            @error('id')
                <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            
            {{-- NOMBRE --}}
            <label for="" class="form-label">Nombre:</label>
            <input type="text" class="form-control" name="nombre" id="" aria-describedby="helpId"
                value="{{ $fila[0]->name }}">
            @error('nombre')
                <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror

            {{-- DESCRIPCIÓN --}}
            <label for="" class="form-label">Descripción</label>
            <input type="text" class="form-control" name="desc" id="" aria-describedby="helpId"
                value="{{ $fila[0]->description }}">
            @error('desc')
                <h6 class="alert alert-danger">{{ $message }}</h6>
            @enderror
            <br>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
@endsection
