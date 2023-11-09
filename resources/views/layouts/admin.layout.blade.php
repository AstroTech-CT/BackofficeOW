<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backoffice</title>
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>
<body>
    <header>
        
        <nav>
            <ul>
                <li><a href="{{ route('admin.usuarios.suspendidos') }}">Eliminar Usuarios Suspendidos</a></li>
                <li><a href="{{ route('admin.usuarios.reportados') }}">Suspender Usuarios Reportados</a></li>
               
            </ul>
        </nav>
    </header>

    <main>
        
        @yield('content')
    </main>

    <footer>
        
    </footer>

    
</body>
</html>
