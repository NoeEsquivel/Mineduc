@extends('layout.home')

@section("tituloPagina", "eliminar un nuevo registro")

@section('contenidot')
    <div class="card">
        <h5 class="card-header">Eliminar un titular!!</h5>
        <div class="card-body">

            <p class="card-text">
            <div class="alert alert-danger" role="alert">
                Estas seguro de eliminar este registro!!!

                <table class="table table-sm table-hover table-bordered" style="background-color: white">
                    <thead>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>CUI</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Direccion</th>
                    <th>Municipio</th>
                    <th>Departamento</th>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ $titulares->nombre }}</td>
                        <td>{{ $titulares->apellido }}</td>
                        <td>{{ $titulares->cui }}</td>
                        <td>{{ $titulares->telefono }}</td>
                        <td>{{ $titulares->email }}</td>
                        <td>{{ $titulares->direccion }}</td>
                        <td>{{ $titulares->municipio }}</td>
                        <td>{{ $titulares->departamento }}</td>
                    </tr>
                    </tbody>
                </table>
                <hr>
                <form action="{{ route('titulares.destroyt', $titulares->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route("titulares.indext") }}" class="btn btn-info">
                        <span class="fas fa-undo-alt"></span> Regresar
                    </a>
                    <button class="btn btn-danger">
                        <span class="fas fa-user-times"></span>  Eliminar
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

