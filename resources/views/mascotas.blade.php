
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <h1>Bienvenido! {{$persona->nombre}}</h1>

    </header>
    <main>

        @if($mascotas->count() > 0)

            <table>

                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Color</th>
                    <th>Raza</th>
                    <th>Dueño</th>
                </tr>
                </thead>
                <tbody>

                @foreach($mascotas as $mascota)
                    <tr>
                        <td>{{ $mascota->nombre }}</td>
                        <td>{{ $mascota->color }}</td>
                        <td>{{ $mascota->raza }}</td>
                        <td>{{ $mascota->persona->nombre}}</td>
                        <td><a href="{{url("/eliminar/{$persona->id}/{$mascota->id}")}}">Eliminar</a></td>
                    </tr>

                @endforeach

                </tbody>
            </table>
        @else
            <h2>No hay mascotas:(</h2>
        @endif
        <form method="POST" action="/agregar/{{$persona->id}}">
            @csrf
            <div>
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" placeholder="Inserta el nombre de la mascota">
            </div>
            <div>
                <label for="color">Color</label>
                <input type="text" name="color" placeholder="Inserta el color de la mascota">
            </div>
            <div>
                <label for="raza">Raza</label>
                <input type="text" name="raza" placeholder="Inserta la raza de la mascota">
            </div>

            <button type="submit">Agregar mascota</button>
        </form>
    </main>
</body>
</html>
