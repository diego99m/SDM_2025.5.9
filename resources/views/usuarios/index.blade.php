@extends('layouts.app')

@section('content')
<h1>Lista de Usuarios</h1>
<a href="{{ route('usuarios.create') }}">Nuevo Usuario</a>

@if(session('success'))
    <p style="color:green;">{{ session('success') }}</p>
@endif

<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Edad</th>
        <th>Requerimiento</th>
        <th>Acciones</th>
    </tr>
    @foreach($usuarios as $usuario)
    <tr>
        <td>{{ $usuario->nombre }}</td>
        <td>{{ $usuario->apellido }}</td>
        <td>{{ $usuario->edad }}</td>
        <td>{{ $usuario->requerimiento }}</td>
        <td>
            <a href="{{ route('usuarios.edit', $usuario) }}">Editar</a>
            <form action="{{ route('usuarios.destroy', $usuario) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button onclick="return confirm('¿Eliminar este usuario?')">Eliminar</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
