<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login - UNSurvival</title>
</head>
<body>
    <h2>Iniciar Sesión en UNSurvival</h2>
    
    @if ($errors->any())
        <div style="color: red; margin-bottom: 10px;">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label>Usuario de Minecraft:</label><br>
            <input type="text" name="username" value="{{ old('username') }}" required autofocus>
        </div>
        <br>
        <div>
            <label>Contraseña:</label><br>
            <input type="password" name="password" required>
        </div>
        <br>
        <div>
            <input type="checkbox" name="remember" id="remember">
            <label for="remember">Recordar mi sesión</label>
        </div>
        <br>
        <button type="submit">Entrar al Panel</button>
    </form>
</body>
</html>