<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - UNSurvival</title>
</head>
<body>
    <h2>¡Bienvenido al Panel, {{ Auth::guard('minecraft')->user()->name }}!</h2>
    <p>Has iniciado sesión con tu cuenta de Minecraft: <b>{{ Auth::guard('minecraft')->user()->username }}</b></p>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Cerrar Sesión</button>
    </form>
</body>
</html>