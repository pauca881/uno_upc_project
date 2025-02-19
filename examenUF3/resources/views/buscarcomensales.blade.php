@extends('plantilla')
@section('content')
    <h1 class="text-center">Pagina Listar Comensales</h1>
    <form name="fbuscar" class="container mb-3" action="{{ route('buscarcomensales') }}" method="POST">
        <div class="input-group mb-3">
            @csrf
            <label>Introduce fecha de la visita de los comensales:</label>
            <input type="date" class="form-control" name="fecha" id="" aria-label="Recipient's username"
                aria-describedby="button-addon2" placeholder="Nombre"><br><br>

                <label>Introduce la mesa:</label>
            <input type="number" class="form-control" name="id_mesa" id=""
                aria-describedby="button-addon2" placeholder="ID de la mesa" required>

            <button type="submit" class="btn btn-outline-primary">Buscar</button>
        </div>
    </form>
    @error('nombre')
        <h6 class="alert alert-danger">{{ $message }}</h6>
    @enderror
@endsection
