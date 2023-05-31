@extends('layout.home')

@section("tituloPagina", "crear un nuevo registro")

@section('contenidoa')
    <div class="card">
        <h5 class="card-header">Actualizar nuevo alumno</h5>
        <div class="card-body">
            <p class="card-text">

            <form action="{{ route('alumnos.updatea', $alumnos->id)}}" method="POST">
                @csrf
                @method("PUT")
                <label for="">Nonbre</label>
                <input type="text" name="nombre" class="form-control" required value="{{$alumnos->nombre}}">
                <label for="">Apellido</label>
                <input type="text" name="apellido" class="form-control" required value="{{$alumnos->apellido}}">
                <label for="">No_carnet</label>
                <input type="text" name="no_carnet" class="form-control" required value="{{$alumnos->no_carnet}}">
                <label for="">CUI</label>
                <input type="text" name="cui" class="form-control" required value="{{$alumnos->cui}}">
                <label for="">Fecha de nacimiento</label>
                <input type="date" name="fecha_nacimiento" class="form-control" required value="{{$alumnos->fecha_nacimiento}}">
                <label for="">Grado</label>
                <input type="text" name="grado" class="form-control" required value="{{$alumnos->grado}}">

                <br>
                <a href="{{ route("alumnos.indexa") }}" class="btn btn-info">
                    <span class="fas fa-undo-alt"></span> Regresar
                </a>
                <button class="btn btn-warning">
                    <span class="fas fa-user-edit"></span>  Actualizar
                </button>

            </form>

            </p>

        </div>
    </div>

@endsection


