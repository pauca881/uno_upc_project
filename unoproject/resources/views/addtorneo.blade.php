@extends('plantilla')
@section('content')
<h1 class="text-center">Pagina Inserir</h1>
<form action="{{ route('datosAñadir') }}" method="POST">
    @csrf
    @if (session('success'))
        <h6 class="alert alert-success">{{ session('success') }}</h6>
    @endif
    
    {{-- NOMBRE --}}
    <div class="mb-3">
        <label for="" class="form-label">Nombre:</label>
        <input type="text" class="form-control" name="nombre" id="" placeholder="Nombre">

    </div>
    @error('nombre')
        <h6 class="alert alert-danger">{{ $message }}</h6>
    @enderror

    {{-- DESCRIPCIÓN --}}
    <div class="mb-3">
        <label for="" class="form-label">Descripción:</label>
        <input type="text" class="form-control" id="" name="desc">

    </div>
    @error('desc')
        <h6 class="alert alert-danger">{{ $message }}</h6>
    @enderror
    

    {{-- ENVIAR --}}
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
