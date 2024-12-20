<!-- resources/views/existencias/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div>
        <h1>Listado de Existencias</h1>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Cantidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($existencias as $existencia)
                    <tr>
                        <td>{{ $existencia->id }}</td>
                        <td>{{ $existencia->nombre }}</td>
                        <td>{{ $existencia->cantidad }}</td>
                        <td>
                            <a href="{{ route('existencias.edit', $existencia->id) }}">Editar</a>
                            <form action="{{ route('existencias.destroy', $existencia->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

