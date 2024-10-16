<?php

$Usuario="root";
$Password="";
$db="proyectodccfinal";
$Server="127.0.0.1";

$Conexion= mysqli_connect($Server, $Usuario, $Password, $db);
$conn = new mysqli($Server, $Usuario, $Password, $db);
if ($Conexion->connect_error) {
    echo "Error en la conexion " . $Conexion->connect_error;
    exit;
}


?>
