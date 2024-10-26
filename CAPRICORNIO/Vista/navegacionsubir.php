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
echo'
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../CSS/SubirEditar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../Controlador/bd.php">

</head>
';
?>

<body>
 <div class=Encabezado>
 <a href="../Vista/navegacionadmin.php" class="logoAdmin">Capricornio</a>
 <div class="BarraBuscar">
  <form action="../Controlador/RegistroEditor.php" method="GET"></form>
    <input name="buscar" type="text" class="Barra_Buscar" id="Barra_Buscar" placeholder="Buscar. . .">
    
   
    </form>
    
    </div>
    <form action="../Vista/SubirEditar.php" method="get">
    <button id="emergencyButton" class="Subir"><i class="fa-solid fa-plus"></i></button>
    

</form>
   
  <div class="ListaEditar">
  <table >
<?php
  $sql="SELECT * from contenido";
  $resultado=mysqli_query($Conexion,$sql);
  $resultado2=$Conexion->query($sql);
 

  while($mostrar=mysqli_fetch_array($resultado) ){

    ?>
    <tr class= cuadro0>
    <td class="Cuadro1">
          <iframe width="440" height="260" controls src="<?php echo $mostrar['VIDEO'] ?>" type="video/mp4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope picture-in-picture" 
            allowfullscreen>
    </iframe>
    </td>
    <td class="Cuadro2"><span class="Nombre1"><?php echo $mostrar['NOMBRE']?></span> <br><span class="Nombre2"><?php echo $mostrar['SINOPSIS']?></span> <br><span class=""><?php echo $mostrar['COD_CONTENIDO']?></span> <br><span class="EditarB"><?php echo "<a href='SubirEditar_modificar.php?id=".$mostrar['COD_CONTENIDO']."'>Editar</a>";?></span> <span class="EliminarB"><?php echo "<a href='Eliminar.php?id=".$mostrar['COD_CONTENIDO']."' onclick='return confirmar()'>Eliminar</a>";?></span>   
  
                       
    </tr>
   
    
    
    <?php
  }
  ?>
  </table>
  </div>
<script src="../JS/buscar.js"></script>
</body>
</html>



