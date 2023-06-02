<?php
$conn = new mysqli("127.0.0.1", "root", "root", "mineduc");

if($conn->connect_error){
    die('Error de conexion ' . $conn->connect_error);
}
?>

<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{--    Esto es para los botones de agregar, eliminar, etc.--}}
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>


    <title>@yield('tituloPagina')</title>


</head>
<body>

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
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
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



<form action="" method="get">
    <input type="text" name="busqueda"> <br>
    <input type="submit" name="enviar" value="Titulares">

    <br><br><br>
        <form action="" method="get">
            <input type="text" name="busquedaa"> <br>
            <input type="submit" name="enviara" value="Alumnos">


            <br><br><br>
            <form action="" method="get">
                <input type="text" name="busquedac"> <br>
                <input type="submit" name="enviarc" value="Catedraticos">

</form>



<br><br><br>

<br><br><br>


{{--//AQUI INICIA BUSQUEDA DE TITULARES--}}
<?php

$html = '';

if(isset($_GET['enviar'])) {
    $busqueda = $_GET['busqueda'];

    $consulta = $conn->query("SELECT * FROM titulares WHERE nombre LIKE '%$busqueda%'");

    while ($row = $consulta->fetch_array()){


        echo $row['id'].'<br>';
        echo $row['nombre'].'<br>';
        echo $row['apellido'].'<br>';
        echo $row['cui'].'<br>';
        echo $row['telefono'].'<br>';
        echo $row['email'].'<br>';
        echo $row['direccion'].'<br>';
        echo $row['municipio'].'<br>';
        echo $row['departamento'].'<br>';


    }
}

?>
<?php

if(isset($_GET['enviar'])) {
    $busqueda = $_GET['busqueda'];

    $consulta = $conn->query("SELECT * FROM titulares WHERE apellido LIKE '%$busqueda%'");

    while ($row = $consulta->fetch_array()){
        echo $row['apellido'].'<br>';
    }
}

?>

{{--//AQUI FINALIZA BUSQUEDA DE TITULARES--}}



{{--//AQUI INICIA BUSQUEDA DE ALUMNOS--}}

<?php

$html = '';

if(isset($_GET['enviara'])) {
    $busquedaa = $_GET['busquedaa'];

    $consultaa = $conn->query("SELECT * FROM alumnos WHERE nombre LIKE '%$busquedaa%'");

    while ($row = $consultaa->fetch_array()){


        echo $row['id'].'<br>';
        echo $row['nombre'].'<br>';
        echo $row['apellido'].'<br>';
        echo $row['no_carnet'].'<br>';
        echo $row['cui'].'<br>';
        echo $row['fecha_nacimiento'].'<br>';
        echo $row['grado'].'<br>';
//        echo $row['municipio'].'<br>';
//        echo $row['departamento'].'<br>';


    }
}

?>

<?php

if(isset($_GET['enviara'])) {
    $busquedaa = $_GET['busquedaa'];

    $consultaa = $conn->query("SELECT * FROM alumnos WHERE apellido LIKE '%$busquedaa%'");

    while ($row = $consultaa->fetch_array()){
        echo $row['apellido'].'<br>';
    }
}
?>


<?php

if(isset($_GET['enviara'])) {
    $busquedaa = $_GET['busquedaa'];

    $consultaa = $conn->query("SELECT * FROM alumnos WHERE grado LIKE '%$busquedaa%'");

    while ($row = $consultaa->fetch_array()){
        echo $row['grado'].'<br>';


        echo $row['id'].'<br>';
        echo $row['nombre'].'<br>';
        echo $row['apellido'].'<br>';
        echo $row['no_carnet'].'<br>';
        echo $row['cui'].'<br>';
        echo $row['fecha_nacimiento'].'<br>';

//        echo $row['municipio'].'<br>';
//        echo $row['departamento'].'<br>';
    }
}
?>


{{--Aqui finaliza alumnos--}}


{{--    AQUI INICIA CATEDRATICOS--}}


    <?php

    $html = '';

    if(isset($_GET['enviarc'])) {
        $busquedac = $_GET['busquedac'];

        $consultac = $conn->query("SELECT * FROM catedraticos WHERE nombre LIKE '%$busquedac%'");

        while ($row = $consultac->fetch_array()){


            echo $row['id'].'<br>';
            echo $row['nombre'].'<br>';
            echo $row['apellido'].'<br>';
            echo $row['codigoid'].'<br>';
            echo $row['cui'].'<br>';
            echo $row['email'].'<br>';
            echo $row['direccion'].'<br>';
            echo $row['telefono'].'<br>';
            echo $row['grado'].'<br>';
//            echo $row['municipio'].'<br>';
            echo $row['departamento'].'<br>';


        }
    }

    ?>

    <?php

    if(isset($_GET['enviarc'])) {
        $busquedac = $_GET['busquedac'];

        $consultac = $conn->query("SELECT * FROM catedraticos WHERE apellido LIKE '%$busquedac%'");

        while ($row = $consultac->fetch_array()){
            echo $row['apellido'].'<br>';
        }
    }
    ?>

    <?php

    if(isset($_GET['enviarc'])) {
        $busquedac = $_GET['busquedac'];

        $consultac = $conn->query("SELECT * FROM catedraticos WHERE grado LIKE '%$busquedac%'");

        while ($row = $consultac->fetch_array()){
            echo $row['grado'].'<br>';

            echo $row['id'].'<br>';
            echo $row['nombre'].'<br>';

            echo $row['codigoid'].'<br>';
            echo $row['cui'].'<br>';
            echo $row['email'].'<br>';
            echo $row['direccion'].'<br>';
            echo $row['telefono'].'<br>';

//            echo $row['municipio'].'<br>';
            echo $row['departamento'].'<br>';
        }
    }
    ?>






    {{--    AQUI FINALIZA CATEDRATICOS--}}


    <!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

{{--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>--}}

{{--SweetAlert--}}
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</body>
</html>

