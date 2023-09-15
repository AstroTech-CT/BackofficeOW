<!DOCTYPE html>
<html>
<head>
    <title>Lista de Publicaciones Reportadas</title>
</head>
<body>
    <h1>Lista de Publicaciones Reportadas</h1>
    <ul>
        @foreach ($reportedPosts as $reportedPost)
            <li>
                <h2>Publicación ID: {{ $reportedPost['ID_Publicacion'] }}</h2>
                <p>Motivo: {{ $reportedPost['motivo'] }}</p>
                <p>Reportado por CI: {{ $reportedPost['ci'] }}</p>
                <p>Fecha y Hora: {{ $reportedPost['Fecha_Hora'] }}</p>
            </li>
        @endforeach
    </ul>
</body>
</html>

