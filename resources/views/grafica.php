<?php
require_once "../routes/_db.php";

?>

<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Grafica</title>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {




            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                <?php
                $SQL = "SELECT * FROM alumnos";
                $consulta = mysqli_query($conexion, $SQL);
                while ($resultado = mysqli_fetch_assoc($consulta)){
                    echo "['" .$resultado['nombre']."', " .$resultado['grado']."],";
                }

                ?>
            ]);

            var options = {
                title: 'Estudiantes según el grado'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>
</head>
<body>

<div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <img src="https://guatemala.gob.gt/wp-content/uploads/2023/02/Gobierno-de-Guatemala-Dr.-Alejandro-paginas.png"    width="200" height="100">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">INICIO</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            ENLACE DESPLEGABLE
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="indexa">Alumnos</a></li>
                            <li><a class="dropdown-item" href="indext">Titulares</a></li>
                            <li><a class="dropdown-item" href="indexc">Catedraticos</a></li>
                            <li><a class="dropdown-item" href="indexb">Buscador</a></li>
                            <li><a class="dropdown-item" href="indexcursos">Cursos</a></li>
                            <li><a class="dropdown-item" href="indexact">Actividades y Calendario</a></li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>



<div id="piechart" style="width: 900px; height: 500px;"></div>





<style>
    body {
        background-image: url('https://png.pngtree.com/background/20210717/original/pngtree-hs-electives-sociology-subject-for-high-school-9th-grade-concepts-in-picture-image_1443131.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }
</style>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>
