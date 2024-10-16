<?php
include("../Controlador/bd.php");
echo'
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../CSS/StyleSubir.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../Controlador/bd.php">

</head>


<body>
 <div class=Encabezado>
 <a href="../Vista/navegacionadmin.php" class="logoAdmin">Capricornio</a>
 <div class="BarraBuscar">
    <input type="text" class="Barra_Buscar" id="Barra_Buscar" placeholder="Buscar. . .">
    <button class="btn_buscar">Buscar</button>
    </div>
    <form action="../Vista/SubirEditar.php" method="get">
    <button id="emergencyButton" class="Subir"><i class="fa-solid fa-plus"></i></button>
    ';
?>
</form>
   
  <div class="ListaEditar">
  <table >
<?php
  $sql="SELECT * from contenido";
  $resultado=mysqli_query($Conexion,$sql);
  $resultado2=$Conexion->query($sql);
 
  
  
  
  while($mostrar=mysqli_fetch_array($resultado) ){

    ?>
    <tr>
    <td class="Cuadro1">
          <video width="440" height="260" controls>
        <source src="<?php echo $mostrar['filepath2'] ?>" type="video/mp4">
    </video></td>
    <td class="Cuadro2"><span class="Nombre1"><?php echo $mostrar['NOMBRE']?></span> <br> 
                        <span class="Nombre2"><?php echo $mostrar['SINOPSIS']?></span><br>
                        <span class="Nombre3"><?php echo $mostrar['PLATAFORMAS']?></span></td>
    </tr>
   
    
    
    <?php
  }
  ?>
  </table>
  </div>

</body>
</html>



