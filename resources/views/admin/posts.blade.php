<!DOCTYPE html>
<html>
<head>
    <title>Lista de Publicaciones</title>
</head>
<body>
    <h1>Lista de Publicaciones</h1>
    <ul>
        @foreach ($posts as $post)
            <li>
                <h2>{{ $post['titulo'] }}</h2>
                <p>{{ $post['contenido'] }}</p>
                <p>Temática: {{ $post['tematica'] }}</p>
                <p>Locación: {{ $post['locacion'] }}</p>
            </li>
        @endforeach
    </ul>
</body>
</html>

