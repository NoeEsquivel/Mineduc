@extends('layout/home')

@section('tituloPagina', 'Crud con titulares')

@section('contenidot')


    {{--    @if (\Session::has('success'))--}}
    {{--        <div class="alert alert-success">--}}
    {{--            <ul>--}}
    {{--                <li>{!! \Session::get('success') !!}</li>--}}
    {{--            </ul>--}}
    {{--        </div>--}}
    {{--    @endif--}}
    {{--    @if ($errors->any())--}}
    {{--        <div class="alert alert-danger">--}}
    {{--            <ul>--}}
    {{--                @foreach ($errors->all() as $error)--}}
    {{--                    <li>{{ $error }}</li>--}}
    {{--                @endforeach--}}
    {{--            </ul>--}}
    {{--        </div>--}}
    {{--    @endif--}}

    {{--    @if(\Session::has('warning'))--}}
    {{--        <div class="alert alert-warning">--}}
    {{--            <ul>--}}
    {{--                <li>{!! \Session::get('warning') !!}</li>--}}
    {{--            </ul>--}}
    {{--        </div>--}}
    {{--    @endif--}}



    {{--    <div class="card" xmlns="http://www.w3.org/1999/html">--}}
    {{--        <h5 class="card-header">Listado de alumnos</h5>--}}
    {{--        <div class="card-body">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-sm-12">--}}
    {{--                    @if($mensaje = \Illuminate\Support\Facades\Session::get('success'))--}}
    {{--                        <div class="alert alert-success" role="alert">--}}
    {{--                            {{ $mensaje }}--}}
    {{--                        </div>--}}

    {{--                    @endif--}}

    {{--                </div>--}}
    {{--            </div>--}}

    <h5 class="card-title text-center">Listado de titulares en el sistema</h5>
    <p>
        <a href="{{ route("titulares.createt") }}" class="btn btn-primary">
            <span class="fas fa-user-plus"></span>  Agregar nuevo titular
        </a>

        {{--                <a href="{{ route("transportes.createt") }}" class="btn btn-primary">--}}
        {{--                    <span class="fas fa-user-plus"></span>  Agregar nuevo catedratico--}}
        {{--                </a>--}}

        {{--                <a href="{{ route("camiones.createc") }}" class="btn btn-primary">--}}
        {{--                    <span class="fas fa-user-plus"></span>  Agregar nuevo titular--}}
        {{--                </a>--}}

        {{--                <a href="{{ route("predios.createp") }}" class="btn btn-primary">--}}
        {{--                    <span class="fas fa-user-plus"></span>  Agregar nuevo  --}}
        {{--                </a>--}}

    </p>
    <hr>

    <p class="card-text">
    <div class="table table-responsive">
        <table class="table table-sm table-bordered">
            <thead>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>CUI</th>
            <th>Telefono</th>
            <th>Email</th>
            <th>Direccion</th>
            <th>Municipio</th>
            <th>Departamento</th>
            <th>Editar</th>
            <th>Eliminar</th>
            </thead>
            <tbody>
            @foreach($datos as $item)
                <tr>
                    <td>{{ $item->nombre }}</td>
                    <td>{{ $item->apellido }}</td>
                    <td>{{ $item->cui }}</td>
                    <td>{{ $item->telefono }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->direccion }}</td>
                    <td>{{ $item->municipio }}</td>
                    <td>{{ $item->departamento }}</td>

                    <td>
                        <form action="{{ route("titulares.editt", $item->id) }}" method="GET">
                            <button class="btn btn-warning btn-sm">
                                <span class="fas fa-user-edit"></span>
                            </button>
                        </form>
                    </td>

                    <td>
                        <form action="{{ route("titulares.showt", $item->id) }}" method="GET">
                            <button class="btn btn-danger btn-sm">
                                <span class="fas fa-user-times"></span>
                            </button>
                        </form>
                    </td>


                </tr>
            @endforeach
            </tbody>

        </table>
        <hr>
        <br>
        <br>


    </div>
    <div class="row">
        <div class="col-sm-12">
            {{ $datos->links() }}
        </div>
        <hr>
    </div>

    </p>

    </div>
    </div>


@endsection




