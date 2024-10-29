<?php
session_start();
if(!isset($_SESSION['usuario'])){
  echo'
        <script>
        alert("Por favor debes iniciar sesión");
        window.location ="../index.php";
        </script>';
       
        session_destroy();
        
        die();
}
if($_SESSION['TipoUsuario']== 0){
  echo'
        <script>
        
        window.location ="../Vista/navegacion.php";
        </script>';      
}
include("../Controlador/bd.php");
?>


<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../CSS/EditarSubir.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    

</head>
<body>
<?php

if(isset($_POST['enviar'])){
    $id = $_POST['id'];
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $imagen = $_POST['image'];
    $imagenbg = $_POST['imagenbg'];
    $video = $_POST['media'];
    $sql="UPDATE contenido SET NOMBRE='".$titulo."', SINOPSIS='".$descripcion."', IMAGEN='".$imagen."', IMAGENBG='".$imagenbg."', 	VIDEO='" .$video."' WHERE COD_CONTENIDO='".$id."'";
    
   $resultado=mysqli_query($Conexion,$sql);

   $resultado=mysqli_query($Conexion,$sql);

    if($resultado){
        echo "<script language='JavaScript'>
        alert('Los datos se actualizaron correctamente');
        location.assign('../Vista/navegacionsubir.php');
        </script>";
    }else{
        echo "<script language='JavaScript'>
        alert('Los datos NO se actualizaron correctamente');
        location.assign('../Vista/navegacionsubir.php');
        </script>";
    }
mysqli_close($Conexion);


 
   mysqli_close($Conexion);
}else{
include("../Controlador/bd.php");
$id=$_GET['id'];
$sql="SELECT * from contenido WHERE COD_CONTENIDO='".$id."'";
$resultado=mysqli_query($Conexion,$sql);
$mostrar=mysqli_fetch_assoc($resultado);
$titulo=$mostrar["NOMBRE"];
$descripcion=$mostrar["SINOPSIS"];
$imagen=$mostrar["IMAGEN"];
$imagenbg=$mostrar["IMAGENBG"];
$video=$mostrar["VIDEO"];   


?>


<div class="contenedor_Editar2">
    <form action="../Vista/navegacionsubir.php" method="get">
    <button class="Btn_Regresar"><i class="fa-solid fa-xmark"></i></button>
    </form>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
        
    <h1 class="titulo1">Editor</h1>
            <input type="text" placeholder="Titulo (Obligatorio)" class="titulo" name="titulo"  VALUE="<?php echo $titulo; ?>"><br>
            <input type="text" placeholder="Descripción" class="descripcion" name="descripcion" VALUE="<?php echo $descripcion; ?>">
            <h2 class="portada2">Portada</h2>
            <h4 class="Text_Img">Elige una imagen para tu pelicula</h4>
            <input class="imagen" placeholder="Coloca el link de la imagen" type="text" name="image" VALUE="<?php echo $imagen; ?>" >
            <h2 class="fondo2">Fondo</h2>
            <h4 class="Text_Img">Elige una imagen para tu pelicula</h4>
            <input class="imagen" placeholder="Coloca el link de la imagen" type="text" name="imagenbg" VALUE="<?php echo $imagenbg; ?>" >
            <h2 class="text_trailer">Trailer</h2>
            <h4 class="Text_Vid">Elige un video para tu pelicula</h4>
            <input class="video" placeholder="Coloca el link del video" type="text" name="media" VALUE="<?php echo $video; ?>">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <button class="btn_guardar2" name="enviar">Guardar</button>
  
        </form>
</form>
</div>
<?php
}?>
</body>