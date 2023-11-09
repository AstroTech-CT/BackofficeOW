@extends('layouts.admin')

@section('content')
    <h1>Suspender Usuarios Reportados</h1>

    
    <form action="{{ route('admin.usuarios.reportados.suspender') }}" method="post">
        @csrf
        <button type="submit" class="btn btn-warning">Suspender Usuarios Reportados</button>
    </form>
@endsection
