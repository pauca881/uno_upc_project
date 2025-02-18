@extends('plantilla')
@section('content')
    <h1 class="text-center">Pagina Buscar Torneo</h1>
    <form name="fbuscar" class="container mb-3" action="{{ route('datosBuscar') }}" method="POST">
        <div class="input-group mb-3">
            @csrf
            <input type="text" class="form-control" name="nombre" id="" aria-label="Recipient's username"
                aria-describedby="button-addon2" placeholder="Nombre">
            <button type="submit" class="btn btn-outline-primary">Buscar</button>
        </div>
    </form>
    @error('nombre')
        <h6 class="alert alert-danger">{{ $message }}</h6>
    @enderror
@endsection
