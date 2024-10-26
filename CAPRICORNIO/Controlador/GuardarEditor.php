<?php
include("../Controlador/bd.php");


    
include("../Controlador/bd.php");
$titulo = $_POST['titulo'];
$descripcion = $_POST['descripcion'];
$categoria = $_POST['categoria'];
$etiquetas = $_POST['etiquetas'];
$imagen = $_POST['image'];
$video = $_POST['media'];


$Consulta = "INSERT INTO contenido(NOMBRE, SINOPSIS, CATEGORIA, PLATAFORMAS, VIDEO, IMAGEN) VALUE('$titulo', '$descripcion', '$categoria', '$etiquetas', '$video', '$imagen')";

$resultado = mysqli_query($Conexion,$Consulta);

if($resultado){
echo "<script>alert('se ha registrado la pelicula con exito');window.location.href='../Vista/navegacionsubir.php'</script>";
}
else{
echo "<script>alert('No se pudo registrar')window.location.href='../Vista/navegacionsubir.php';</script>";
}


$conn->close();
?>

