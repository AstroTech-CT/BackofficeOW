@extends('layouts.admin')

@section('content')
    <h1>Eliminar Usuarios Suspendidos</h1>

    
    <form action="{{ route('admin.usuarios.suspendidos.eliminar') }}" method="post">
        @csrf
        <button type="submit" class="btn btn-danger">Eliminar Usuarios Suspendidos</button>
    </form>
@endsection
