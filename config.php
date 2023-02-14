<?php
    $host = "localhost";
    $user = "root";
    $clave = "";
    $bd = "torneo_futbol";
    $conexion = mysqli_connect($host,$user,$clave,$bd);
    if (mysqli_connect_error()){
        echo "No se pudo conectar a la base de datos";
        exit();
    }
?>