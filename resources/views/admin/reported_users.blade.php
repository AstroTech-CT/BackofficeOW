<!DOCTYPE html>
<html>
<head>
    <title>Usuarios Reportados</title>
</head>
<body>
    <h1>Usuarios Reportados</h1>
    <ul>
        @foreach ($reportedUsers as $reportedUser)
            <li>{{ $user['name'] }} {{ $user['last_name'] }} {{ $user['ci'] }} {{ $user['email'] }} {{ $user['phone'] }} {{ $user['username'] }}</li>
        @endforeach
    </ul>
</body>
</html>
