
<!DOCTYPE html>
<html>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

{{--    Esto es para los botones de agregar, eliminar, etc.--}}
<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

<body>
<h1>Clases segun grado escolar</h1>
<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Inicio</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Enlace desplegable
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route("alumnos.indexa") }}">Alumnos</a></li>
                            <li><a class="dropdown-item" href="{{ route("titulares.indext") }}">Titulares</a></li>
                            <li><a class="dropdown-item" href="{{ route("catedraticos.indexc") }}">Catedraticos</a></li>
                            <li><a class="dropdown-item" href="{{ route("indexb") }}">Buscador</a></li>
                            <li><a class="dropdown-item" href="{{ route("indexcursos") }}">Cursos</a></li>
                            <li><a class="dropdown-item" href="{{ route("indexact") }}">Actividades y Calendario</a></li>
                            {{--                            <li><a class="dropdown-item" href="{{ route("personas.index") }}">Personas</a></li>--}}
                            {{--                            <li><a class="dropdown-item" href="{{ route("predios.indexp") }}">Predios</a></li>--}}
                            {{--                            <li><a class="dropdown-item" href="{{ route("tmercancias.indextm") }}">Tipo_mercancia</a></li>--}}
                            {{--                            <li><a class="dropdown-item" href="{{ route("mercancias.indexm") }}">Mercancia</a></li>--}}
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<head>
    <title>Clases</title>
    <style>
table {
    width: 100%;
    border-collapse: collapse;
        }

        th, td {
    padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
    background-color: #f2f2f2;
        }

    </style>

    <style>
        body {
            background-image: url('https://th.bing.com/th/id/R.ddd981d5b142944a3d76a4f731028ab0?rik=MmGddrYD1%2f4zyw&riu=http%3a%2f%2fchaconoticias.com.ar%2fwp-content%2fuploads%2f2020%2f11%2fa.jpeg&ehk=%2b3aKWEru09pZRnZj%2bVpkjW95MGVs7PgoFfyqbtiT0tE%3d&risl=&pid=ImgRaw&r=0');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<table>
    <tr>
        <th>Grado</th>
        <th>Materias</th>
    </tr>
    <tr>
        <td>Parvulos I, II Y III</td>

        <td>Educacion para la Ciencia y la Ciudadania</td>
        <td>Destrezas de comunicacion y lenguaje</td>
        <td>Destrezas de aprendizaje matematico</td>
        <td>Educacion Fisica</td>
        <td>Educacion Musical</td>
        <td>Artes Visuales</td>
    </tr>
    <tr>
        <td>Primero, Segundo y Tercero</td>

        <td>Comunicacion y Lenguaje Español</td>
        <td>Ingles</td>
        <td>Matematicas</td>
        <td>Medio Social y Natural</td>
        <td>Expresion Artistica</td>
        <td>Educacion Fisica</td>
        <td>Formacion Ciudadana</td>
    </tr>
    <tr>
        <td>Cuarto, Quinto y Sexto</td>

        <td>Comunicacion y Lenguaje Español</td>
        <td>Ingles</td>
        <td>Matematicas</td>
        <td>Ciencias Naturales y Tecnologia</td>
        <td>Ciencias Sociales</td>
        <td>Expresion Artistica</td>
        <td>Educacion Fisica</td>
        <td>Formacion Ciudadana</td>
        <td>Productividad y Desarrollo
</td>
    </tr>
</table>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>--}}

{{--SweetAlert--}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
