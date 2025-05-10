@extends('layouts.app')

@section('content')
<h1>Editar Usuario</h1>
<form action="{{ route('usuarios.update', $usuario) }}" method="POST">
    @csrf
    @method('PUT')
    Nombre: <input type="text" name="nombre" value="{{ $usuario->nombre }}"><br>
    Apellido: <input type="text" name="apellido" value="{{ $usuario->apellido }}"><br>
    Edad: <input type="number" name="edad" value="{{ $usuario->edad }}"><br>
    Requerimiento: <input type="text" name="requerimiento" value="{{ $usuario->requerimiento }}"><br>
    <button type="submit">Actualizar</button>
</form>
@endsection
