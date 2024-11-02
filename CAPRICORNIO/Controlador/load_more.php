<?php
session_start();
include("bd.php");

$category = $_GET['category'];
$offset = (int) $_GET['offset'];
$limit = 4;

$consulta = "SELECT * FROM contenido WHERE CATEGORIA = $category LIMIT $limit OFFSET $offset";
$resultado = mysqli_query($Conexion, $consulta);

if ($resultado) {
   while ($mostrar = mysqli_fetch_assoc($resultado)) {
   echo "<td>";
   if($_SESSION['TipoUsuario']== 0){
    echo "<a href='Reproduccion.php?id=".$mostrar['COD_CONTENIDO']."'>";
    echo "<img src='".$mostrar['IMAGEN']."' alt='Imagen' width='250' height='400'></a><br>";
    echo "<span class='Nombre1'>".$mostrar['NOMBRE']."</span>";
  }elseif($_SESSION['TipoUsuario']== 2){
    echo "<a href='ReproduccionAdmin.php?id=".$mostrar['COD_CONTENIDO']."'>";
    echo "<img src='".$mostrar['IMAGEN']."' alt='Imagen' width='250' height='400'></a><br>";
    echo "<span class='Nombre1'>".$mostrar['NOMBRE']."</span>"; 
  }else {
    echo "Error en la consulta: " . mysqli_error($Conexion); // Para depuración
  }
  echo "</td>";
  }
  } 

?>
