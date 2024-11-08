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
    <link rel="stylesheet" href="../CSS/Style_.css">
</head>
<body>
    <header class="header">
         <div class ="menu container">
            <a href="../Vista/navegacionadmin.php" class="logo" id="logo">Capricornio</a>
            <input type="checkbox" id="menu" />
            <label for="menu">
             <img src="../IMG/menu.png" class="menu-icono" alt="menu"> 
            </label>
            <nav class="navbar">
             <ul>
                <li><a href="../Vista/navegacionadmin.php">Inicio</a></li>
                ';?>
                <li><a href="NavegacionPopularAdmin.php?id=0">Popular</a></li><?php echo'
                <li><a href="../Vista/Navegacionrandomadmin.php">Random</a></li>
                <li><a href="../Vista/navegacionsubir.php">Subir</a></li>
             </ul>
            </nav> 
            <a href="../Vista/Buscador.php" class="buscar" id="buscar"><img src="../IMG/buscar.png" class="buscar"></a>
            <a href="#" class="btn-1" id="btn-abrir-modal">Usuario</a>
            <dialog id="modal">
             <section class="usuario-1">
             
             <img src="../IMG/IMG-USUARIO.png" class="usuario">'; echo $_SESSION['usuario'] ;echo'<a href="" class="modal-c" "id="btn-cerrar-modal"><img src="../IMG/close-icon.png" class="close"></a>
             </section>
             <hr class="linea-usuario">
             <section class="cierre-usuario">
             <img src="../IMG/LogOut.png" class="logout"><a href="../Vista/CerrarSesion.php" class="cerrar-sesion">Cerrar Sesion</a><br>
             </section>
            </dialog>
        </div>
        <div class="header-content container">
          <div class="header-1">
            <img src="../IMG/venom.png" alt="">
            <a href="ReproduccionAdmin.php?id=6" class="btn-2">Ver ahora</a>
        </div>
        <div class="header-2">
            <h1>Las mejores <br> películas</h1>
            <a href="ReproduccionAdmin.php?id=6"><img src="../IMG/play.png" alt="" class="venom-btn"></a>
          </div>
        </div>      
    </header>
';

?>

<section class="movies container">

<h2>Cine de Catástrofes</h2>
<hr class="linea-1">

 <div class="">

     <div class="">
         <div class="">
         <table class="tbl_Catastrofes">
           
            <?php
            $limit = 4;
            $offset = isset($_GET['offset']) ? (int)$_GET['offset'] : 0;
            $ConsultaC = "SELECT * FROM contenido WHERE CATEGORIA IN (3) LIMIT $limit OFFSET $offset";
            $resultadoC=mysqli_query($Conexion,$ConsultaC);
            
             while ($mostrarC = mysqli_fetch_assoc($resultadoC)) {
           ?>
                <td>
                    <?php echo"<a href='ReproduccionAdmin.php?id=".$mostrarC['COD_CONTENIDO']."'>"?><img src="<?php echo $mostrarC['IMAGEN']; ?>" alt="Imagen" width="250" height="400"></a><br>
                    <span class="Nombre1"><?php echo $mostrarC['NOMBRE']?></span>
                </td>
         <?php
         }
          ?>
        </table>
         </div>
     </div>
 </div>

        <div class="load-more" id="load-more-1"  data-offset="4">Mostrar más</div>

    </section>

    <section class="movies container">

       <h2>Cine de Acción y Aventuras</h2>
       <hr class="linea-2">

        <div class="">

            <div class="">
                <div class="">
                <table class="tbl_Accion">
                  
                   <?php
                   $limit = 4;
                   $offset = isset($_GET['offset']) ? (int)$_GET['offset'] : 0;
                   $ConsultaA = "SELECT * FROM contenido WHERE CATEGORIA IN (1, 2) LIMIT $limit OFFSET $offset";
                   
                   $resultadoA=mysqli_query($Conexion,$ConsultaA);
                   
                    while ($mostrarA = mysqli_fetch_assoc($resultadoA)) {
                  ?>
                       <td>
                           <?php echo"<a href='ReproduccionAdmin.php?id=".$mostrarA['COD_CONTENIDO']."'>"?><img src="<?php echo $mostrarA['IMAGEN']; ?>" alt="Imagen" width="250" height="400"></a><br>
                           <span class="Nombre1"><?php echo $mostrarA['NOMBRE']?></span>
                       </td>
                <?php
                }
                 ?>
               </table>
                </div>
            </div>
        </div>
        <div class="load-more" id="load-more-2" data-offset="4" >Mostrar más</div>

    </section>

    <section class="movies container">

       <h2>Anime</h2>
       <hr class="linea-3">

        <div class="">

            <div class="">
                <div class="">
                <table class="tbl_Anime">
                  
                   <?php
                   $limit = 4;
                   $offset = isset($_GET['offset']) ? (int)$_GET['offset'] : 0;
                   $ConsultaANI = "SELECT * FROM contenido WHERE CATEGORIA IN (11) LIMIT $limit OFFSET $offset";
                   $resultadoANI=mysqli_query($Conexion,$ConsultaANI);
                   
                    while ($mostrarANI = mysqli_fetch_assoc($resultadoANI)) {
                  ?>
                       <td>
                           <?php echo"<a href='ReproduccionAdmin.php?id=".$mostrarANI['COD_CONTENIDO']."'>"?><img src="<?php echo $mostrarANI['IMAGEN']; ?>" alt="Imagen" width="250" height="400"></a><br>
                           <span class="Nombre1"><?php echo $mostrarANI['NOMBRE']?></span>
                       </td>
                <?php
                }
                 ?>
               </table>
                </div>
            </div>
        </div>
        <div class="load-more" id="load-more-3">Mostrar más</div>

    </section>

    <section class="movies container">

       <h2>Cine de Terror</h2>
       <hr class="linea-4">

        <div class="">

            <div class="">
                <div class="">
                <table class="tbl_Terror">
                  
                   <?php
                   $limit = 4;
                   $offset = isset($_GET['offset']) ? (int)$_GET['offset'] : 0;
                   $ConsultaT = "SELECT * FROM contenido WHERE CATEGORIA IN (9) LIMIT $limit OFFSET $offset";
                   $resultadoT=mysqli_query($Conexion,$ConsultaT);
                   
                    while ($mostrarT = mysqli_fetch_assoc($resultadoT)) {
                  ?>
                       <td>
                           <?php echo"<a href='ReproduccionAdmin.php?id=".$mostrarT['COD_CONTENIDO']."'>"?><img src="<?php echo $mostrarT['IMAGEN']; ?>" alt="Imagen" width="250" height="400"></a><br>
                           <span class="Nombre1"><?php echo $mostrarT['NOMBRE']?></span>
                       </td>
                <?php
                }
                 ?>
               </table>
                </div>
            </div>
        </div>
        <div class="load-more" id="load-more-4">Mostrar más</div>

    </section>

    <section class="movies container">

       <h2>Películas de Ciencia Ficción</h2>
       <hr class="linea-5">

        <div class="">

            <div class="">
                <div class="">
                <table class="tbl_Ficcion">
                  
                   <?php
                   $limit = 4;
                   $offset = isset($_GET['offset']) ? (int)$_GET['offset'] : 0;
                   $ConsultaCF = "SELECT * FROM contenido WHERE CATEGORIA IN (4) LIMIT $limit OFFSET $offset";
                   $resultadoCF=mysqli_query($Conexion,$ConsultaCF);
                   
                    while ($mostrarCF = mysqli_fetch_assoc($resultadoCF)) {
                  ?>
                       <td>
                           <?php echo"<a href='ReproduccionAdmin.php?id=".$mostrarCF['COD_CONTENIDO']."'>"?><img src="<?php echo $mostrarCF['IMAGEN']; ?>" alt="Imagen" width="250" height="400"></a><br>
                           <span class="Nombre1"><?php echo $mostrarCF['NOMBRE']?></span>
                       </td>
                <?php
                }
                 ?>
               </table>
                </div>
            </div>
        </div>
        <div class="load-more" id="load-more-5">Mostrar más</div>

    </section>

<section class="movies container">

<h2>Películas de Comedia</h2>
<hr class="linea-6">

 <div class="">

     <div class="">
         <div class="">
         <table class="tbl_Comedia">
           
            <?php
            $limit = 4;
            $offset = isset($_GET['offset']) ? (int)$_GET['offset'] : 0;
            $ConsultaCD = "SELECT * FROM contenido WHERE CATEGORIA IN (5) LIMIT $limit OFFSET $offset";
            $resultadoCD=mysqli_query($Conexion,$ConsultaCD);
            
             while ($mostrarCD = mysqli_fetch_assoc($resultadoCD)) {
           ?>
                <td>
                    <?php echo"<a href='ReproduccionAdmin.php?id=".$mostrarCD['COD_CONTENIDO']."'>"?><img src="<?php echo $mostrarCD['IMAGEN']; ?>" alt="Imagen" width="250" height="400"></a><br>
                    <span class="Nombre1"><?php echo $mostrarCD['NOMBRE']?></span>
                </td>
         <?php
         }
          ?>
        </table>
         </div>
     </div>
 </div>
 <div class="load-more" id="load-more-6">Mostrar más</div>

</section>

<section class="movies container">

<h2>Cine de Misterio y Suspense</h2>
<hr class="linea-7">

 <div class="">

     <div class="">
         <div class="">
         <table class="tbl_Misterio">
           
            <?php
            $limit = 4;
            $offset = isset($_GET['offset']) ? (int)$_GET['offset'] : 0;
            $ConsultaMS = "SELECT * FROM contenido WHERE CATEGORIA IN (12, 10) LIMIT $limit OFFSET $offset";
            $resultadoMS=mysqli_query($Conexion,$ConsultaMS);
            
             while ($mostrarMS = mysqli_fetch_assoc($resultadoMS)) {
           ?>
                <td>
                    <?php echo"<a href='ReproduccionAdmin.php?id=".$mostrarMS['COD_CONTENIDO']."'>"?><img src="<?php echo $mostrarMS['IMAGEN']; ?>" alt="Imagen" width="250" height="400"></a><br>
                    <span class="Nombre1"><?php echo $mostrarMS['NOMBRE']?></span>
                </td>
         <?php
         }
          ?>
        </table>
         </div>
     </div>
 </div>
 <div class="load-more" id="load-more-7">Mostrar más</div>

</section>

<section class="movies container">

<h2>Películas Dramáticas</h2>
<hr class="linea-8">

 <div class="">

     <div class="">
         <div class="">
         <table class="tbl_Drama">
           
            <?php
            $limit = 4;
            $offset = isset($_GET['offset']) ? (int)$_GET['offset'] : 0;
            $ConsultaDR = "SELECT * FROM contenido WHERE CATEGORIA IN (7) LIMIT $limit OFFSET $offset";
            $resultadoDR=mysqli_query($Conexion,$ConsultaDR);
            
             while ($mostrarDR = mysqli_fetch_assoc($resultadoDR)) {
           ?>
                <td>
                    <?php echo"<a href='ReproduccionAdmin.php?id=".$mostrarDR['COD_CONTENIDO']."'>"?><img src="<?php echo $mostrarDR['IMAGEN']; ?>" alt="Imagen" width="250" height="400"></a><br>
                    <span class="Nombre1"><?php echo $mostrarDR['NOMBRE']?></span>
                </td>
         <?php
         }
          ?>
        </table>
         </div>
     </div>
 </div>
 <div class="load-more" id="load-more-8">Mostrar más</div>

</section>

<section class="movies container">

<h2>Películas de Fantasía</h2>
<hr class="linea-9">

 <div class="">

     <div class="">
         <div class="">
         <table class="tbl_Fantasia">
           
            <?php
            $limit = 4;
            $offset = isset($_GET['offset']) ? (int)$_GET['offset'] : 0;
            $ConsultaFS = "SELECT * FROM contenido WHERE CATEGORIA IN (8) LIMIT $limit OFFSET $offset";
            $resultadoFS=mysqli_query($Conexion,$ConsultaFS);
            
             while ($mostrarFS = mysqli_fetch_assoc($resultadoFS)) {
           ?>
                <td>
                    <?php echo"<a href='ReproduccionAdmin.php?id=".$mostrarFS['COD_CONTENIDO']."'>"?><img src="<?php echo $mostrarFS['IMAGEN']; ?>" alt="Imagen" width="250" height="400"></a><br>
                    <span class="Nombre1"><?php echo $mostrarFS['NOMBRE']?></span>
                </td>
         <?php
         }
          ?>
        </table>
         </div>
     </div>
 </div>
 <div class="load-more" id="load-more-9" data-offset="4" >Mostrar más</div>

</section>


<section class="movies container">

<h2>Documentales</h2>
<hr class="linea-10">

 <div class="">

     <div class="">
         <div class="">
         <table class="tbl_Documental">
           
            <?php
            $limit = 4;
            $offset = isset($_GET['offset']) ? (int)$_GET['offset'] : 0;
            $ConsultaDT = "SELECT * FROM contenido WHERE CATEGORIA IN (6) LIMIT $limit OFFSET $offset";
            $resultadoDT=mysqli_query($Conexion,$ConsultaDT);
            
             while ($mostrarDT = mysqli_fetch_assoc($resultadoDT)) {
           ?>
                <td>
                    <?php echo"<a href='ReproduccionAdmin.php?id=".$mostrarDT['COD_CONTENIDO']."'>"?><img src="<?php echo $mostrarDT['IMAGEN']; ?>" alt="Imagen" width="250" height="400"></a><br>
                    <span class="Nombre1"><?php echo $mostrarDT['NOMBRE']?></span>
                </td>
         <?php
         }
          ?>
        </table>
         </div>
     </div>
 </div>
 <div class="load-more" id="load-more-10">Mostrar más</div>

</section>

<?php
echo'
    
    <footer class="footer container">
    
        <h3>Capricornio</h3>
        <ul>
                <li><a href="../Vista/navegacionadmin.php">Inicio</a></li>
                <li><a href="../Vista/NavegacionPopularAdmin.php">Popular</a></li>
                <li><a href="../Vista/Navegacionrandomadmin.php">Random</a></li>
                <li><a href="../Vista/navegacionsubir.php">Subir</a></li>
        </ul>
        
    </footer>
    <script src="../JS/Script.js"></script>
    <script src="../JS/Menu.js"></script>
    <script src="../JS/Modal.js"></script>
    <script src="../JS/Usuario.js"></script>

</body>
</html>
';
?>

