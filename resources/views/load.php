<?php

$conn = new mysqli("127.0.0.1", "root", "root", "mineduc");

if($conn->connect_error){
    die('Error de conexion' . $conn->connect_error);
}

global $conn;
require 'buscador.php';

$columns = [
    'id', 'nombre', 'apellido', 'no_carnet', 'cui', 'fecha_nacimiento', 'grado' ];

$table = "alumnos";

$campo = isset($_POST['campo']) ? $conn->real_escape_string($_POST['campo']) : null;

//Es lo mismo que arriba
//$campo = $conn->real_escape_string($_POST['campo']) ?? null;


$sql = "SELECT " . implode(", ", $columns) . "
FROM $table";

//echo $sql;
//exit;

$resultado = $conn->query($sql);
$num_rows = $resultado->num_rows;

$html = '';


if($num_rows >0){
    while ($rows = $resultado->fetch_assoc()){
        $html .= '<tr>';

        $html .= '<td>' . $rows['id'] . '</td>';
        $html .= '<td>' . $rows['nombre'] . '</td>';
        $html .= '<td>' . $rows['apellido'] . '</td>';
        $html .= '<td>' . $rows['no_carnet'] . '</td>';
        $html .= '<td>' . $rows['fecha_nacimiento'] . '</td>';
        $html .= '<td>' . $rows['grado'] . '</td>';

        $html .= '<td> <a href="" Editar </a> </td>';
        $html .= '<td> <a href="" Eliminar </a> </td>';

        $html .= '</tr>';

    }

} else {
    $html .= '<tr>';

    $html .= '<td colspan="7">Sin resultados</td>';

    $html .= '</tr>';
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);


