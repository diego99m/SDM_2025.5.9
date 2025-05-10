@extends('layouts.app')

@section('content')
<h1>Crear Usuario</h1>
<form action="{{ route('usuarios.store') }}" method="POST">
    @csrf
    Nombre: <input type="text" name="nombre"><br>
    Apellido: <input type="text" name="apellido"><br>
    Edad: <input type="number" name="edad"><br>
    Requerimiento: <input type="text" name="requerimiento"><br>
    <button type="submit">Guardar</button>
</form>
@endsection
