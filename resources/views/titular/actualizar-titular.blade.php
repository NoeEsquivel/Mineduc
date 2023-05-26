@extends('layout.home')

@section("tituloPagina", "crear un nuevo registro")

@section('contenidot')
    <div class="card">
        <h5 class="card-header">Actualizar nuevo titular</h5>
        <div class="card-body">
            <p class="card-text">

            <form action="{{ route('titulares.updatet', $titulares->id)}}" method="POST">
                @csrf
                @method("PUT")
                <label for="">Nonbre</label>
                <input type="text" name="nombre" class="form-control" required value="{{$titulares->nombre}}">
                <label for="">Apellido</label>
                <input type="text" name="apellido" class="form-control" required value="{{$titulares->apellido}}">
                <label for="">CUI</label>
                <input type="number" name="cui" class="form-control" required value="{{$titulares->cui}}">
                <label for="">Telefono</label>
                <input type="tel" name="telefono" class="form-control" required value="{{$titulares->telefono}}">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control" required value="{{$titulares->email}}">
                <label for="">Direccion</label>
                <input type="text" name="direccion" class="form-control" required value="{{$titulares->direccion}}">
                <label for="">Municipio</label>
                <input type="text" name="municipio" class="form-control" required value="{{$titulares->municipio}}">
                <label for="">Departamento</label>
                <input type="text" name="departamento" class="form-control" required value="{{$titulares->departamento}}">

                <br>
                <a href="{{ route("titulares.indext") }}" class="btn btn-info">
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



