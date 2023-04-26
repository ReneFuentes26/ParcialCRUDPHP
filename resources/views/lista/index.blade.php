@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Lista de Reproduccion</div>
                    <a href="{{ route('lista.create') }}" class="btn btn-primary">Agregar</a>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Fecha de creación</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($listas as $lista)
                                    <tr>
                                        <td>{{ $lista->id }}</td>
                                        <td>{{ $lista->nombre }}</td>
                                        <td>{{ $lista->descripcion }}</td>
                                        <td>{{ $lista->fecha_creacion }}</td>
                                        <td>
                                            <a href="{{ route('lista.edit', $lista->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                            <form action="{{ route('lista.destroy', $lista->id) }}" method="POST" style="display: inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
