@section('nav')
    <nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('aboutus') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('jugadores') }}">Jugadores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('partidas') }}">Partidas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('torneos') }}">Torneos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
@endsection
