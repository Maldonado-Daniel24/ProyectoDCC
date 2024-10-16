<?php
include("../Controlador/bd.php");

$estado1 = $Conexion->query("SELECT CATEGORIA, NOMBRE FROM categoria");
$estado2 = $Conexion->query("SELECT PLATAFORMAS, NOMBRE FROM plataformas");


echo'
<!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" href="../CSS/EditarSubir.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../Controlador/bd.php">

</head>
<body>

    <div class="contenedor_Editar">
    <form action="../Vista/navegacionsubir.php" method="get">
    <button class="Btn_Regresar"><i class="fa-solid fa-xmark"></i></button>
    </form>
        <form action="../Controlador/GuardarEditor.php" method="POST" enctype="multipart/form-data">
            <h1 class="titulo1">Detalles</h1>
            <input type="text" placeholder="Titulo (Obligatorio)" class="titulo" name="titulo"><br>
            <input type="text" placeholder="Descripción" class="descripcion" name="descripcion">
            <h2>Portada</h2>
            <h4 class="Text_Img">Elige una imagen para tu pelicula</h4>
            <h2 class="text_trailer">Trailer</h2>
            <h4 class="Text_Vid">Elige un video para tu pelicula</h4>
            <h2 class="Generos">Genero</h2>
            <h4 class="Text_gen">Elige de que genero es la pelicula</h4>
            <h2 class="platafor">plataforma</h2>
            <h4 class="Text_pla">Elige en que plataforma puedes encontrarlo</h4>
  
            <button class="btn_guardar">Guardar</button>
';
?>


    <select name="categoria" class="Genero" id="Genero"> 
    <?php while ($row = $estado1 ->fetch_assoc()) {?>
        <option value="<?php echo $row['CATEGORIA'];?>"><?php echo $row['NOMBRE'];?></option>
        <?php
    }
    ?>

  </select>
  <select name="etiquetas" class="Genero" id="Etiquetas"> 
    <?php while ($row = $estado2 ->fetch_assoc()) {?>
        <option value="<?php echo $row['PLATAFORMAS'];?>"><?php echo $row['NOMBRE'];?></option>
        <?php
    }
    ?>
  </select>

  <input class="imagen" type="file" name="image" required><br>
  <input class="video" type="file" name="media" required>
  
  
  
        </form>
        
    </div>
</body>





</html>




