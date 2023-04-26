@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar lista de reproducción</h1>
        <form method="POST" action="{{ route('lista.update', $lista->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" value="{{ $lista->nombre }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea name="descripcion" id="descripcion" class="form-control">{{ $lista->descripcion }}</textarea>
            </div>
            <div class="form-group">
                <label for="fecha_creacion">Fecha de creación:</label>
                <input type="date" name="fecha_creacion" id="fecha_creacion" value="{{ $lista->fecha_creacion }}" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </form>
    </div>
@endsection
