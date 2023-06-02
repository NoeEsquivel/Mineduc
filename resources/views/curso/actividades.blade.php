
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
<h1>Calendario de Examenes y Actividades De Mayor Relevancia</h1>
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
            background-image: url('https://3.bp.blogspot.com/-ETSZgDLShME/W4sUqASBTiI/AAAAAAAAFlA/ZeUJIGrBWocBg4u5QMZ7YP2UgJ7hLEh6QCK4BGAYYCw/s1600/LOGO_MINEDUC.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>
<table>
    <tr>
        <th>Examenes y E.N.</th>
        <th>Fechas</th>
    </tr>
    <tr>
        <td>Bimestre I</td>


        <td>24 al 28 de Abril</td>


    </tr>
    <tr>
        <td>Entrega De Notas I</td>

        <td>05 de Mayo</td>

    </tr>
    <tr>
        <td>Bimestre II</td>

        <td>17 al 21 de Julio</td>

    <tr>
        <td>Entrega De Notas II</td>


        <td>28 de Julio</td>


    </tr>
    <tr>
        <td>Bimestre III</td>

        <td>18 al 22 de Septiembre</td>

    </tr>
    <tr>
        <td>Entrega De Notas III</td>

        <td>29 de Septiembre</td>

    <tr>
        <td>Bimestre IV</td>

        <td>06 al 10 de noviembre</td>

    </tr>
    <tr>
        <td>Entrega De Notas IV</td>

        <td>22 de Noviembre</td>
    </tr>

    <tr>
        <th>Actividades Relevantes</th>
        <th>Fechas</th>
    </tr>
    <tr>
        <td>Primer Dia De Clases y Acto Civico De Inaguración</td>


        <td>20 de Febrero</td>


    </tr>
    <tr>
        <td>Clausura de Parvulos III</td>

        <td>8 de Diciembre</td>

    </tr>
    <tr>
        <td>Clausura de Sexto</td>

        <td>11 de Diciembre</td>

    </tr>
    <tr>
        <td>Entrega De Expedientes A Los Padres De Familia
        </td>

        <td>13 De Diciembre</td>

    </tr>
    <th>VACACIONES</th>

</table>
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>--}}

{{--SweetAlert--}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
