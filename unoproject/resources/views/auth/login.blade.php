<!-- resources/views/auth/login.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Iniciar sesión</h2>

    
    <!-- Formulario de login -->
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" id="username" value="{{ old('username') }}" required>
        </div>
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <button type="submit">Iniciar sesión</button>
        </div>
    </form>

    <p>¿No tienes cuenta? <a href="{{ route('register') }}">Regístrate aquí</a></p>
</body>
</html>
