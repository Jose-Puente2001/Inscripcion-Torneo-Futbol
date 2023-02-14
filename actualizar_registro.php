<?php

require_once 'config.php';

if(isset($_POST)){

$id = $_POST['id'];
$torneo = $_POST['torneo'];
$equipos = $_POST['equipos'];
$categoria = $_POST['categoria'];
$query = "UPDATE inscripcion SET torneo='$torneo', equipos='$equipos', categoria='$categoria' WHERE id='$id'";
$resultado = mysqli_query($conexion, $query);
		header("Location: listado_torneo.php");


}

?>