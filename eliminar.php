<?php

require_once 'config.php';

$id_torneo = $_GET['id'];

$query = "DELETE FROM inscripcion WHERE id='$id_torneo'";
$resultado = mysqli_query($conexion, $query);
header("Location:listado_torneo.php");


?>