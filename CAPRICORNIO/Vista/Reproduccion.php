<?php
echo'
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../CSS/ReproduccionStyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<body>
    <header class="header">
         <div class ="menu container">
            <a href="../Vista/navegacion.php" class="logo">Capricornio</a>
            <input type="checkbox" id="menu" />
            <label for="menu">
             <img src="../IMG/menu.png" class="menu-icono" alt="menu"> 
            </label>
            <nav class="navbar">
             <ul>
                <li><a href="../Vista/navegacion.php">Inicio</a></li>
                <li><a href="../Vista/NavegacionNuevo.php">Nuevo</a></li>
                <li><a href="../Vista/NavegacionPopular.php">Popular</a></li>
                <li><a href="">Random</a></li>
             </ul>
            </nav>
             <a href="#" class="btn-1" id="btn-abrir-modal">Usuario</a>
             <dialog id="modal">
             <section class="usuario-1">
             <img src="../IMG/IMG-USUARIO.png" class="usuario"><h4>Cristian</h4><a href="" class="modal-c" "id="btn-cerrar-modal"><img src="../IMG/close-icon.png" ></a>
             </section>
             <hr class="linea-usuario">
             <section class="cierre-usuario">
             <img src="../IMG/LogOut.png" class="logout"><a href="../Vista/CerrarSesion.php" class="cerrar-sesion">Cerrar Sesion</a><br>
             </section>
            </dialog>
        </div>
    </header>
    ';
    include("../Controlador/bd.php");
    $id=$_GET['id'];
    $sql="SELECT * from contenido WHERE COD_CONTENIDO='".$id."'";
    $resultado=mysqli_query($Conexion,$sql);
    $mostrar=mysqli_fetch_assoc($resultado);
    $titulo=$mostrar["NOMBRE"];
    $descripcion=$mostrar["SINOPSIS"];
    $imagen=$mostrar["IMAGEN"];
    $video=$mostrar["VIDEO"];
    $categoria=$mostrar["CATEGORIA"];
    $plataforma=$mostrar["PLATAFORMAS"];
    $sql2="SELECT * from categoria WHERE CATEGORIA='".$categoria."'";
    $resultado2=mysqli_query($Conexion,$sql2);
    $mostrar2=mysqli_fetch_assoc($resultado2);
    $categoriaV=$mostrar2["NOMBRE"];
    $sql3="SELECT * from plataformas WHERE PLATAFORMAS='".$plataforma."'";
    $resultado3=mysqli_query($Conexion,$sql3);
    $mostrar3=mysqli_fetch_assoc($resultado3);
    $plataformaV=$mostrar3["IMAGEN"];
    ?>
    
    <h1 class="genero"><?php echo $categoriaV;?></h1>
    <h5 class="Titulo"style="text-transform: uppercase;"><?php echo $titulo;?></h5>
    <img src="<?php echo $imagen;?>" class="poster">
    <section class="contenido">
    <span class="video_peli"><iframe width="640" height="460" controls src="<?php echo $video;?>" type="video/mp4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope picture-in-picture" 
            allowfullscreen>
    </iframe></span>
    <p class="titulo-sinopsis">SINOPSIS</p>
    <hr class="linea-sinopsis">
    <p class="sinopsis"><?php echo $descripcion;?></p>
    </section>
    <p class="plataformas">PLATAFORMAS</p>
    <img src="<?php echo $plataformaV;?>" class="netflix" width="95" height="95">

    <footer class="footer container">

        <h3>Capricornio</h3>

        <ul>
           <li><a href="../Vista/navegacion.php">Inicio</li>
           <li><a href="../Vista/NavegacionNuevo.php">Nuevo</li>
           <li><a href="../Vista/NavegacionPopular.php">Popular</li>
           <li><a href="../Vista/NavegacionRandom.php">Random</li>
        </ul>
        
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../JS/PopularModal.js"></script>
    <script src="../JS/PopularUsuario.js"></script>
    <script src="../JS/PopularMenu.js"></script>
</body>
</html>

