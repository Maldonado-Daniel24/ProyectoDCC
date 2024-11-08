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
    <link rel="stylesheet" href="../CSS/Buscar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../Controlador/bd.php">

</head>


<body>
 <div class=Encabezado>
 <div class ="menu container">
            <a href="../Vista/navegacionadmin.php" class="logo">Capricornio</a>
            <input type="checkbox" id="menu" />
            <label for="menu">
            </label>
 <nav class="navbar">
      <ul class="navegacion">
          <li><a href="../Vista/navegacionadmin.php">Inicio</a></li>
          <li><a href="../Vista/NavegacionPopularAdmin.php">Popular</a></li>
          <li><a href="../Vista/Navegacionrandomadmin.php">Random</a></li>
          <li><a href="../Vista/navegacionsubir.php">Subir</a></li>
      </ul>
  </nav> 
 <div class="BarraBuscar">
  <form action="../Controlador/RegistroEditor.php" method="GET"></form>
    <input name="buscar" type="text" class="Barra_Buscar" id="Barra_Buscar" placeholder="Buscar. . .">
   
    </form>
    
    </div>
  <a href="#" class="btn-1" id="btn-abrir-modal">Usuario</a>
  <dialog id="modal">
    <section class="usuario-1">
             
      <img src="../IMG/IMG-USUARIO.png" class="usuario">'; echo $_SESSION['usuario'] ;echo'<a href="" class="modal-c" "id="btn-cerrar-modal"><img src="../IMG/close-icon.png"></a>
      </section>
      <hr class="linea-usuario">
      <section class="cierre-usuario">
      <img src="../IMG/LogOut.png" class="logout"><a href="../Vista/CerrarSesion.php" class="cerrar-sesion">Cerrar Sesion</a><br>
      </section>
      </dialog>
 </div>
 </div>
 ';
?>
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
      <td class="Cuadro2">
        <span class="Nombre1"><?php echo $mostrar['NOMBRE']?></span> 
        <br>
        <span class="Nombre2"><?php echo $mostrar['SINOPSIS']?></span> 
        <br>
        <span class="VerB"><?php echo "<a href='ReproduccionAdmin.php?id=".$mostrar['COD_CONTENIDO']."'>Visualizar</a>";?></span>  
      </td>             
    </tr>
   
    
    
    <?php
  }
  ?>
  </table>
  </div>
<script src="../JS/buscar.js"></script>
<script src="../JS/Menu.js"></script>
<script src="../JS/Modal.js"></script>
<script src="../JS/Usuario.js"></script>
</body>
</html>



