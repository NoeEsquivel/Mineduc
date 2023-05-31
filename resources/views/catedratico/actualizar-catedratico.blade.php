@extends('layout.home')

@section("tituloPagina", "crear un nuevo registro")

@section('contenidoc')
    <div class="card">
        <h5 class="card-header">Actualizar nuevo catedratico</h5>
        <div class="card-body">
            <p class="card-text">

            <form action="{{ route('catedraticos.updatec', $catedraticos->id)}}" method="POST">
                @csrf
                @method("PUT")
                <label for="">Nonbre</label>
                <input type="text" name="nombre" class="form-control" required value="{{$catedraticos->nombre}}">
                <label for="">Apellido</label>
                <input type="text" name="apellido" class="form-control" required value="{{$catedraticos->apellido}}">
                <label for="">CODIGOID</label>
                <input type="text" name="codigoid" class="form-control" required value="{{$catedraticos->codigoid}}">
                <label for="">CUI</label>
                <input type="text" name="cui" class="form-control" required value="{{$catedraticos->cui}}">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" required value="{{$catedraticos->email}}">
                <label for="">Direccion</label>
                <input type="text" name="direccion" class="form-control" required value="{{$catedraticos->direccion}}">
                <label for="">Telefono</label>
                <input type="tel" name="telefono" class="form-control" required value="{{$catedraticos->telefono}}">
                <label for="">Grado</label>
                <input type="text" name="grado" class="form-control" required value="{{$catedraticos->seccion}}">
                <label for="">Departamento</label>
                <input type="text" name="departamento" class="form-control" required value="{{$catedraticos->departamento}}">

                <br>
                <a href="{{ route("catedraticos.indexc") }}" class="btn btn-info">
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
