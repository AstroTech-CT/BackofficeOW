<!DOCTYPE html>
<html>
<head>
    <title>Lista de Usuarios</title>
</head>
<body>
    <h1>Lista de Usuarios</h1>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user['name'] }} {{ $user['last_name'] }} {{ $user['ci'] }} {{ $user['email'] }} {{ $user['phone'] }} {{ $user['username'] }}</li>
        @endforeach
    </ul>
</body>
</html>
