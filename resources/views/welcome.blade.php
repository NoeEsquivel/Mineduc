<?php
require_once "../routes/_db.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title></title>

    <style>
        :root{
            --main-color: #0046fd;
            --second-color: #e2c992;
            --black: #000;
            --white: #fff;
        }
        *{
            margin: 0;
            padding: 0;
            font-family: 'Josefin Sans', sans-serif;
        }
        body{
            background: var(--main-color);
            height: 100vh;
        }
        .clearfix{
            clear: both;
        }
        .left-div{
            width:12%;
            float:left;
            height: 90vh;
            padding: 25px 10px 0px 35px;

        }
        .right-div{
            width: 76%;
            float:left;
            height: 85vh;
            background: var(--white);
            margin: 25px;
            border-radius: 25px;
            padding: 30px;
        }
        .logo{
            text-align: center;
            color: white;
            font-weight: bold;
        }
        .hr{
            border: none;
            height: 1px;
            background: #ddd3;
            margin-top: 15px;
            margin-bottom: 10px;
        }
        .nav li{
            list-style: none;
            padding: 13px 10px;
        }
        .nav li a{
            text-decoration: none;
            color: white;
        }
        .nav li a i{
            padding-right: 5px;
            color: var(--second-color);
            font-size: 23px;
            padding-right: 10px;
            vertical-align: bottom;
            width: 23px;
            height: 23px;
        }
        .active{
            background:var(--white);
            border-radius: 27px;
            position: relative;
        }

        .nav > .active::before, .nav > .active::after {
            content: "";
            position: absolute;
        }
        .nav > li{
            border-radius: 60px 0 0 60px;
            width: 101%;
            padding-left: 25px;
            margin-left: -16px;
        }
        .nav > .active::before {
            top: -80px;
            right: -24px;
            height: 80px;
            width: 40px;
            border-bottom-right-radius: 80px;
            box-shadow: 0 40px 0 0 var(--white);
            transform: rotateY(324deg);
        }
        .nav > .active::after {
            top: 49px;
            right: -24px;
            height: 80px;
            width: 38px;
            border-top-right-radius: 80px;
            box-shadow: 0 -40px 0 0 var(--white);
            transform: rotateY( 324deg);
        }
        .active a{
            color: var(--black)!important;
        }
        .support{
            background: #ffffff21;
            border-radius: 10px;
            position: absolute;
            width: 175px;
            bottom: 35px;
        }

        .head{
            padding: 0px 6px;
            border-bottom: 1px solid #d6d6d8b8;
            padding-bottom: 10px;
        }
        .col-div-6{
            width: 50%;
            float: left;
        }
        .profile{
            display: inline-block;
            float: right;
            width: 200px;
            margin-top: -20px;

        }
        .pro-img{
            float: left;
            width: 40px;
            margin-top: 8px;
            margin-left: 20px;
        }
        .profile p{
            color: #6c7293;
            font-weight: 500;
            margin-left: 35px;
            margin-top: 10px;
            font-size: 13.5px;
            background-color: white;
            padding: 10px;
            border-radius: 25px;
            padding-left: 35px;
            cursor: pointer;
        }
        .dots{
            margin-left: 10px;
            color: #348f6c;
        }
        .profile-div{
            background-color: white;
            width: 140px;
            border: 1px solid #ddd;
            padding: 10px 0px;
            right: 6%;
            border-radius: 5px;
            position: absolute;
            z-index: 9;
            display: none;

        }
        .profile-div:after{
            content: '';
            position: absolute;
            height: 10px;
            width: 10px;
            background-color: white;
            top: -6px;
            border-left: 1px solid #ddd;
            border-top: 1px solid #ddd;
            transform: rotate(45deg);
            right: 10%;
        }
        .profile-div p{
            margin: 0px;
            padding: 10px 20px;
        }
        .profile-div p:hover{
            margin: 0px;
            padding: 10px 20px;
            background-color: #348f6c;
            border-radius: 0px;
            color: white;
        }


        .col-div-4-1{
            width: 33.3%;
            float: left;
        }
        .box{
            width: 88%;
            height: 130px;
            background-color: #e3e3e3;
            margin-left: 10px;
            padding: 10px;
            box-shadow: 2px 5px 10px #ddd;
            position: relative;
            border-radius: 15px;
        }
        .box p{
            color: #348f6c;
            font-weight: 500;
            padding-left: 10px;
        }
        .number{
            font-size: 35px;
            margin-bottom: 0px;
            margin-top: 20px;
        }
        .percent{
            margin: 0px;
            font-size: 14px;
            color: #348f6c!important;
        }
        .percent span{
            font-size: 12px;
            color: #348f6c;
            padding-left: 3px;
        }
        .head-1{
            font-size: 18px!important;
            margin: 10px 0px;
            color: #6c7293;
        }
        .head-1 span{
            float: right;
            background-color: #348f6c;
            color: white;
            padding: 3px 10px;
            font-size: 15px;
            line-height: 14px;
            vertical-align: baseline;
            padding-top: 8px;
        }
        .box-icon{
            font-size: 20px!important;
            margin-top: 35px!important;
            color: #348f6c;
            padding-right: 10px;
            background-color: #efeff5;
            padding: 15px;
            border-radius: 25px;
            position: absolute;
            right: 16px;
            top: -18px;
        }
        .box-1{
            width: 88%;
            height: 282px;
            background-color:#e3e3e3;
            margin-left: 10px;
            padding:10px;
            box-shadow: 2px 5px 10px #ddd;
            position: relative;
        }
        .m-box{
            color: #6c7293;
            position: relative;
            padding: 0px 12px;
        }

        .m-box p{
            display: inline-block;
            margin: 10px 0px;
        }
        .no{
            position: absolute!important;
            top: 21px;
            right: 15px;
            font-weight: 500;
        }
        .no-1{
            font-size: 12px;
            color: #9398b1;
        }
        .act-p{
            font-size: 13px;
            color: #6c7293;
            margin-bottom: 25px;
        }
        .act-p .fa{
            color: orange!important;
        }

        .content-box-1{
            padding: 0px 10px;
        }
        .col-div-12{
            width: 100%;
        }

        .col-div-4{
            width: 30%;
            float: left;
        }
        .content-box{
            padding: 20px;
        }
        .content-box p{
            margin: 0px;
            font-size: 20px;
            color:#6c7293;
        }
        .content-box p span{
            float: right;
            background-color: #5643ff;
            color: white;
            padding: 3px 10px;
            font-size: 15px;
        }
        .box-8{
            width: 97.8%;
            background-color: #fff;
            height: 330px;

        }
        .active1{
            background: #348f6c;
            color: white;
            border-radius: 0;
        }
        .active1 p .no-1{
            color: white;
        }
        .circle-wrap {
            margin: 50px auto;
            width: 150px;
            height: 150px;
            background: #e6e2e7;
            border-radius: 50%;
        }
        .circle-wrap .circle .mask,
        .circle-wrap .circle .fill {
            width: 150px;
            height: 150px;
            position: absolute;
            border-radius: 50%;
        }
        .circle-wrap .circle .mask {
            clip: rect(0px, 150px, 150px, 75px);
        }

        .circle-wrap .circle .mask .fill {
            clip: rect(0px, 75px, 150px, 0px);
            background-color: #348f6c;
        }
        .circle-wrap .circle .mask.full,
        .circle-wrap .circle .fill {
            animation: fill ease-in-out 3s;
            transform: rotate(126deg);
        }

        @keyframes fill {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(126deg);
            }
        }
        .circle-wrap .inside-circle {
            width: 130px;
            height: 130px;
            border-radius: 50%;
            background: #fff;
            line-height: 130px;
            text-align: center;
            margin-top: 10px;
            margin-left: 10px;
            position: absolute;
            z-index: 100;
            font-weight: 700;
            font-size: 2em;
            color: #348f6c;
        }
    </style>



</head>
<body>

<section>
    <div class="left-div">
        <br>
        <h2 class="logo"><span style="font-weight: 100; ">-MINEDUC-</span></h2>
        <hr class="hr" />
        <ul class="nav">
            {{--           Opciones de navbar lateral para navegar dentro de vistas--}}
            <li class="active"><a href=""><i class="fa fa-th-large"></i> Inicio</a></li>
            <li><a href="/indexa"><i class="fa fa-user"></i> Alumno</a></li>
            <li><a href="/indext"><i class="fa fa-key"></i> Titulares</a></li>
            <li><a href="/indexc"><i class="fa fa-desktop"></i> Catedratico</a></li>
            <li><a href="/indexcursos"><i class="fa fa-gear"></i> Cursos</a></li>
            <li><a href="/indexact"><i class="fa fa-bullhorn"></i> Calendario/Actividades</a></li>

            {{--            // Es para el buscador--}}
            <li><a href="/indexb"><i class="fa fa-search"></i>Buscador</a></li>
        </ul>
        <br><br>
        <img src="https://umg.edu.gt/assets/umg.png" class="support">
    </div>

    <div class="right-div">




        <div id="main">
            <br>
            <div class="head">
                <div class="col-div-6">
                    <p class="nav"> PROYECTO FINAL - PROGRAMACION III</p>
                </div>

                <div class="col-div-6">

                    {{--            // Perfil sobre sitio web de MINEDUC--}}

                    <div class="profile">

                        <img src="https://e7.pngegg.com/pngimages/146/551/png-clipart-user-login-mobile-phones-password-user-miscellaneous-blue.png" class="pro-img" />
                        <p>UMG<i class="fa fa-ellipsis-v dots" aria-hidden="true"></i></p>
                        <div class="profile-div">
                            <p><i class="fa fa-user"></i>    Usuario</p>
                            <p><i class="fa fa-cogs"></i>    Ajustes</p>
                            <p><i class="fa fa-power-off"></i>    Cerrar sesión</p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            {{--            // Cajas en donde colocaremos graficas, o material de contenido sobre proyecto MINEDUC--}}
            <div class="clearfix"></div>
            <br/><br/><br/>






            <div class="col-div-4-1">
                <div class="box">
                    <p class="head-1">Estudiantes</p>

                    <?php
                    $SQL = "SELECT COUNT(*) id FROM  alumnos";
                    $consulta = mysqli_query($conexion, $SQL);
                    while ($resultado = mysqli_fetch_assoc($consulta)){
                        echo "[" .$resultado['id']."]";
                    }

                    ?>

                    <br><br>
                    <p class="percent"><i class="fa fa-long-arrow-up" aria-hidden="true"></i> 5.674% <span>Incremento</span></p>
                    <i class="fa fa-line-chart box-icon"></i>
                </div>
            </div>



            <div class="col-div-4-1">
                <div class="box">
                    <p class="head-1">Catedraticos</p>

                    <?php
                    $SQL = "SELECT COUNT(*) id FROM  catedraticos";
                    $consulta = mysqli_query($conexion, $SQL);
                    while ($resultado = mysqli_fetch_assoc($consulta)){
                        echo "[" .$resultado['id']."]";
                    }

                    ?>

<br><br>
                    <p class="percent" ><i class="fa fa-long-arrow-up" aria-hidden="true"></i> 6.64% <span>Incremento</span></p>
                    <i class="fa fa-circle-o-notch box-icon"></i>
                </div>
            </div>



            <div class="col-div-4-1">
                <div class="box">
                    <p class="head-1">Titulares</p>

                    <?php
                    $SQL = "SELECT COUNT(*) id FROM titulares";
                    $consulta = mysqli_query($conexion, $SQL);
                    while ($resultado = mysqli_fetch_assoc($consulta)){
                        echo "[" .$resultado['id']."]";
                    }

                    ?>


                    <br><br>

                    <p class="percent"><i class="fa fa-long-arrow-up" aria-hidden="true"></i> 5.674% <span>Incremento</span></p>
                    <i class="fa fa-circle-o-notch box-icon"></i>
                </div>
            </div>

            <div class="clearfix"></div>
            <br/><br/>


            <div class="col-div-4-1">
                <div class="box-1">
                    <div class="content-box-1">
                        <p class="head-1">Preguntas frecuentes</p>
                        <br/>
                        <div class="m-box active1">
                            <p>Carreras Autorizadas<br/></p>

                        </div>

                        <div class="m-box">
                            <p>Búsqueda de establecimientos<br/></p>

                        </div>

                        <div class="m-box">
                            <p>Directorio MINEDUC<br/></p>

                        </div>

                        <div class="m-box">
                            <p>Oficina Nacional de Servicio Civil - ONSEC<br/></p>

                        </div>

                        <div class="m-box">
                            <p>Estado de contrato Maestros 021<br/></p>

                        </div>


                    </div>
                </div>
            </div>



            <div class="col-div-4-1">

                <div class="box-1">
                    <div class="content-box-1">


                        <div class="container">
                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                        <script type="text/javascript">
                            google.charts.load('current', {'packages':['corechart']});
                            google.charts.setOnLoadCallback(drawChart);

                            function drawChart() {


                                var data = google.visualization.arrayToDataTable([
                                    ['Task', 'Hours per Day'],
                                    <?php
                                    $SQL = "SELECT COUNT(*) id FROM alumnos";
                                    $consulta = mysqli_query($conexion, $SQL);
                                    while ($resultado = mysqli_fetch_assoc($consulta)){
                                        echo "['" .$resultado['id']."', " .$resultado['id']."],";
                                    }


                                    $SQL = "SELECT COUNT(*) id FROM catedraticos";
                                    $consulta = mysqli_query($conexion, $SQL);
                                    while ($resultado = mysqli_fetch_assoc($consulta)){
                                        echo "['" .$resultado['id']."', " .$resultado['id']."],";
                                    }

                                    $SQL = "SELECT COUNT(*) id FROM titulares";
                                    $consulta = mysqli_query($conexion, $SQL);
                                    while ($resultado = mysqli_fetch_assoc($consulta)){
                                        echo "['" .$resultado['id']."', " .$resultado['id']."],";
                                    }

                                    ?>
                                ]);

                                var options = {
                                    title: 'Total de inscritos'
                                };

                                var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                                chart.draw(data, options);
                            }
                        </script>

                            <div id="piechart" style="width: 320px; height: 285px;" ></div>


                        </div>




                    </div>
                </div>
            </div>



            <div class="col-div-4-1">
                <div class="box-1">
                    <div class="content-box-1">
                        <p class="head-1">Valores<span>View All</span></p>
                        <br/>
                        <p class="act-p"><i class="fa fa-circle" ></i> Responsabilidad </p>
                        <p class="act-p"><i class="fa fa-circle" style="color:red!important;"></i> Honestidad </p>
                        <p class="act-p"><i class="fa fa-circle" style="color:green!important;"></i> Colaboración </p>
                        <p class="act-p"><i class="fa fa-circle" ></i> Perseverancia </p>

                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>

    </div>
    <div class="clearfix"></div>
</section>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function(){
        $(".profile p").click(function(){
            $(".profile-div").toggle();

        });
        $(".noti-icon").click(function(){
            $(".notification-div").toggle();
        });
    });
</script>
<script type="text/javascript">
    $('li').click(function(){
        $('li').removeClass("active");
        $(this).addClass("active");
    });
</script>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>
