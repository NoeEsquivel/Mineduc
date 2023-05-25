@extends('layout.home')

@section("tituloPagina", "crear un nuevo registro")

@section('contenidoa')
    <div class="card">
        <h5 class="card-header">Agregar nuevo alumno</h5>
        <div class="card-body">

            <p class="card-text">
            <form action="{{ route('alumnos.storea') }}" method="POST">
                @csrf
                <label for="">Nonbre</label>
                <input type="text" name="nombre" class="form-control" required>
                <label for="">Apellido</label>
                <input type="text" name="apellido" class="form-control" required>
                <label for="">No_carnet</label>
                <input type="text" name="no_carnet" class="form-control" required>
                <label for="">CUI</label>
                <input type="text" name="cui" class="form-control" required>
                <label for="">Fecha de nacimiento</label>
                <input type="date" name="fecha_nacimiento" class="form-control" required>
                <label for="">Grado</label>
                <input type="text" name="grado" class="form-control" required>
                <br>
                <a href="{{ route("alumnos.indexa") }}" class="btn btn-info">
                    <span class="fas fa-undo-alt"></span> Regresar
                </a>
                <button class="btn btn-primary">
                    <span class="fas fa-user-plus"></span>Agregar
                </button>

            </form>

            </p>

        </div>
    </div>

@endsection

