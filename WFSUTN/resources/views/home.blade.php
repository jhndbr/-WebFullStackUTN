<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-5">Bienvenidos al Sistema de Gestión de Existencias</h1>
        <p>Este sistema permite gestionar las existencias de productos, realizar modificaciones y llevar un control detallado.</p>

        <h3>Integrantes del Proyecto</h3>
        <ul>
            <li>Integrante 1: Jhon</li>
            <li>Integrante 2: Matías</li>
            <li>Integrante 3: Carolina</li>
        </ul>

        <h3>Contacto</h3>
        <!-- Enlace al listado de existencias -->
<a href="{{ route('existencias.index') }}">Listado de Existencias</a>

<!-- Enlace para crear una nueva existencia -->
<a href="{{ route('existencias.create') }}">Crear Existencia</a>

<!-- Enlace al perfil del usuario -->
<a href="{{ route('profile.edit') }}">Mi perfil</a>

    </div>
@endsection
