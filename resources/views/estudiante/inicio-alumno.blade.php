@extends('layout/home')

@section('tituloPagina', 'Crud con alumnos')

@section('contenidoa')


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

            <h5 class="card-title text-center">Listado de alumnos en el sistema</h5>
            <p>
                <a href="{{ route("alumnos.createa") }}" class="btn btn-primary">
                    <span class="fas fa-user-plus"></span>  Agregar nuevo alumno
                </a>

                <a href="{{ route("grafica") }}" class="btn btn-primary">
                    <span class="fa-thin fa-chart-pie-simple"></span>  Gráfica
                </a>

                <style>
                    body {


                        background-image: url('https://png.pngtree.com/background/20211215/original/pngtree-chinese-style-border-border-white-simple-style-picture-image_1498005.jpg');
                        background-repeat: no-repeat;
                        background-size: cover;
                        background-position: center;

                    }

                </style>
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
                    <th>No_carnet</th>
                    <th>CUI</th>
                    <th>Fecha_nacimiento</th>
                    <th>Grado</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                    </thead>
                    <tbody>
                    @foreach($datos as $item)
                        <tr>
                            <td>{{ $item->nombre }}</td>
                            <td>{{ $item->apellido }}</td>
                            <td>{{ $item->no_carnet }}</td>
                            <td>{{ $item->cui }}</td>
                            <td>{{ $item->fecha_nacimiento }}</td>
                            <td>{{ $item->grado }}</td>


                            <td>
                                <form action="{{ route("alumnos.edita", $item->id) }}" method="GET">
                                    <button class="btn btn-warning btn-sm">
                                        <span class="fas fa-user-edit"></span>
                                    </button>
                                </form>
                            </td>

                            <td>
                                <form action="{{ route("alumnos.showa", $item->id) }}" method="GET">
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



