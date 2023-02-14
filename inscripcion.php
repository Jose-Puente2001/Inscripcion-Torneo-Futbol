<?php

include("config.php");

if(isset($_POST)){

$torneo = $_POST['torneo'];
$equipos = $_POST['equipos'];
$categoria = $_POST['categoria'];

$query = "INSERT INTO inscripcion(torneo, equipos, categoria) VALUES('$torneo', '$equipos', '$categoria')";


$resultado = mysqli_query($conexion, $query);
header("Location:index.php");

}

?>