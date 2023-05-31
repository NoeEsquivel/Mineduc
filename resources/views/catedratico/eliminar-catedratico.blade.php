@extends('layout.home')

@section("tituloPagina", "eliminar un nuevo registro")

@section('contenidoc')
    <div class="card">
        <h5 class="card-header">Eliminar un catedratico!!</h5>
        <div class="card-body">

            <p class="card-text">
            <div class="alert alert-danger" role="alert">
                Estas seguro de eliminar este registro!!!

                <table class="table table-sm table-hover table-bordered" style="background-color: white">
                    <thead>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>CODIGOID</th>
                    <th>CUI</th>
                    <th>email</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Grado</th>
                    <th>Departamento</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ $catedraticos->nombre }}</td>
                        <td>{{ $catedraticos->apellido }}</td>
                        <td>{{ $catedraticos->codigoid }}</td>
                        <td>{{ $catedraticos->cui }}</td>
                        <td>{{ $catedraticos->email }}</td>
                        <td>{{ $catedraticos->direccion }}</td>
                        <td>{{ $catedraticos->telefono }}</td>
                        <td>{{ $catedraticos->grado }}</td>
                        <td>{{ $catedraticos->departamento }}</td>
                    </tr>
                    </tbody>
                </table>
                <hr>
                <form action="{{ route('catedraticos.destroyc', $catedraticos->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route("catedraticos.indexc") }}" class="btn btn-info">
                        <span class="fas fa-undo-alt"></span>Regresar
                    </a>
                    <button class="btn btn-danger">
                        <span class="fas fa-user-times"></span>Eliminar
                    </button>

                </form>
            </div>
            </p>

        </div>
    </div>

@endsection

{{--SweetAlert--}}
{{--referencia de SweetAlert  https://sweetalert2.github.io/#download--}}
{{--video de referencia https://youtu.be/D3Ww5FGa1mY--}}
{{--se instalo npm install sweetalert2 en la terminal--}}
{{--El origen del codigo esta en la visata eliminar-camion--}}

@section('alert')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="sweetalert2.all.min.js"></script>

    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">



    <script>

        Swal.fire({
            title: 'Está seguro?',
            text: "¡No podrás revertir esto!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, borrar este dato!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'da click en boton eliminar!',
                    'tus datos seran eliminados.',
                    'success'
                )
                this.submit();
            }
        })




    </script>

@endsection


