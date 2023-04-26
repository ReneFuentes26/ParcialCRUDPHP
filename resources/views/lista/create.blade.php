@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Nueva lista de reproducción</h1>
        <form method="POST" action="{{ route('lista.store') }}">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea name="descripcion" id="descripcion" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="fecha_creacion">Fecha de creación:</label>
                <input type="date" name="fecha_creacion" id="fecha_creacion" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Crear lista</button>
        </form>
    </div>
@endsection
