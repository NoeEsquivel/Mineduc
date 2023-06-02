@extends('layout/home')

@section('tituloPagina', 'Crud con buscador')

@section('contenidobus')

    <div>

        <h2>ALUMNOS Hola</h2>

        <form action="" method="post">
            <label for="campo">Buscar</label>
            <input type="text" name="campo" id="campo">
        </form>

        <p>    </p>

        <table>
            <thead>
            <th>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>No_carnet</th>
            <th>CUI</th>
            <th>Fecha_nacimiento</th>
            <th>Grado</th>
            <th>Editar</th>
            <th>Eliminar</th>

            </th>

            <th> </th>

            <th> </th>

            </thead>

            <tbody id="content">

            </tbody>


        </table>

        <script>
            getData()

            function getData(){
                let input = document.getElementById("campo").value
                let content = document.getElementById("content")
                let url = "load.php"
                let formaData= new FormData()
                formaData.append('campo', 'input')

                fetch(url, {
                    method: "Post",
                    body: formaData
                }).then(response => response.json())
                    .then(data => {
                        content.innerHTML = data
                    }).catch(err => console.log(err))
            }



        </script>

    </div>





@endsection
