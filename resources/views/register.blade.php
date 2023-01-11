<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <h1 >Registro</h1>
    </header>
    <main style="height: 50vh">
        <form method="POST">
            @csrf
            <div>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" placeholder="Inserta tu nombre">
            </div>
            <div>
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" placeholder="Inserta tu apellido">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Inserta tu email">
            </div>
            <button type="submit">Registrarse</button>
        </form>
    </main>
</body>
</html>
