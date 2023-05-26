@extends('layout.home')

@section("tituloPagina", "crear un nuevo registro")

@section('contenidot')
    <div class="card">
        <h5 class="card-header">Agregar nuevo titular</h5>
        <div class="card-body">

            <p class="card-text">
            <form action="{{ route('titulares.storet') }}" method="POST">
                @csrf
                <label for="">Nonbre</label>
                <input type="text" name="nombre" class="form-control" required>
                <label for="">Apellido</label>
                <input type="text" name="apellido" class="form-control" required>
                <label for="">CUI</label>
                <input type="number" name="cui" class="form-control" required>
                <label for="">Telefono</label>
                <input type="tel" name="telefono" class="form-control" required>
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" required>
                <label for="">Direccion</label>
                <input type="text" name="direccion" class="form-control" required>
                <label for="">Municipio</label>
                <input type="text" name="municipio" class="form-control" required>
                <label for="">Departamento</label>
                <input type="text" name="departamento" class="form-control" required>
                <br>
                <a href="{{ route("titulares.indext") }}" class="btn btn-info">
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

