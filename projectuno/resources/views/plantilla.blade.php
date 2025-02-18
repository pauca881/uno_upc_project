<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: #e3f2fd;">
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
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('jugadortorneo') }}">Inscripción Torneos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br><br><br>

    @yield('content')
    <footer class="bg-dark text-white text-center py-4 fixed-bottom">
        <div class="container">
            <p class="mb-0">© 2025 Tu Nombre. Todos los derechos reservados.</p>
            <p>
                <a href="#" class="text-white">Política de privacidad</a> |
                <a href="#" class="text-white">Términos de uso</a>
            </p>
        </div>
    </footer>
</body>

</html>

<!--
λ php artisan db:seed --class=tpartidaseeder

   INFO  Seeding database.


   BadMethodCallException

  Call to undefined method App\Models\tpartida::factory()

  at C:\Users\rli1007\scoop\persist\laragon\www\unoproject\vendor\laravel\framework\src\Illuminate\Support\Traits\ForwardsCalls.php:67
     63▕      * @throws \BadMethodCallException
     64▕      */
     65▕     protected static function throwBadMethodCallException($method)
     66▕     {
  ➜  67▕         throw new BadMethodCallException(sprintf(
     68▕             'Call to undefined method %s::%s()', static::class, $method
     69▕         ));
     70▕     }
     71▕ }

  1   C:\Users\rli1007\scoop\persist\laragon\www\unoproject\vendor\laravel\framework\src\Illuminate\Support\Traits\ForwardsCalls.php:36
      Illuminate\Database\Eloquent\Model::throwBadMethodCallException("factory")

  2   C:\Users\rli1007\scoop\persist\laragon\www\unoproject\vendor\laravel\framework\src\Illuminate\Database\Eloquent\Model.php:2368
      Illuminate\Database\Eloquent\Model::forwardCallTo(Object(Illuminate\Database\Eloquent\Builder), "factory") -->
