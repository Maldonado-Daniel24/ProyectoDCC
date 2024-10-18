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
if($_SESSION['TipoUsuario']== 2){
    echo'
          <script>
          
          window.location ="../Vista/navegacionadmin.php";
          </script>';
         
      
          
  }
echo'
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../CSS/PopularStyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<body>
    <header class="header">
         <div class ="menu container">
            <a href="#" class="logo">Capricornio</a>
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
             <img src="../IMG/IMG-USUARIO.png" class="usuario"><h4>Cristian</h4><a href="" "id="btn-cerrar-modal"><img src="../IMG/close-icon.png">
             </section>
             <hr class="linea-usuario">
             <section class="cierre-usuario">
             <img src="../IMG/LogOut.png" class="logout"><a href="../Vista/CerrarSesion.php" class="cerrar-sesion">Cerrar Sesion</a><br>
             </section>
            </dialog>
        </div>
        <h1 class="titulo">Top 10 global</h1>
        <p class="listas">Listas semanales del Top 10 de <br> películas y TV más vistos</p>
    </header>
<img src="../IMG/top10.png" class="top10">
<section class="lista-desplegable">
<div class="dropdown">
     <div class="select"> 
         <span class="selected">Películas</span>
         <div class="caret"></div>
     </div>
     <ul class="seleccion-desplegable">
       <li>Películas</li>
       <li>Series</li>
     </ul>
</div>
</section>
<section class="carrusel">

<img src="../IMG/flecha-izquierda.png" alt="" class="custom-prev" id="custom-prev">

    <div class="swiper mySwiper">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <a href="../Vista/Reproduccion.php"><img src="../IMG/1.jpg" alt=""></a>
            </div>
            <div class="swiper-slide">
                <a href="../Vista/Reproduccion.php"><img src="../IMG/2.jpg" alt=""></a>
            </div>
            <div class="swiper-slide">
                <a href="../Vista/Reproduccion.php"><img src="../IMG/3.jpg" alt=""></a>
            </div>
            <div class="swiper-slide">
                <a href="../Vista/Reproduccion.php"><img src="../IMG/4.jpg" alt=""></a>
            </div>
            <div class="swiper-slide">
                <a href="../Vista/Reproduccion.php"><img src="../IMG/5.jpg" alt=""></a>
            </div>
            <div class="swiper-slide">
                <a href="../Vista/Reproduccion.php"><img src="../IMG/6.jpg" alt=""></a>
            </div>
            <div class="swiper-slide">
                <a href="../Vista/Reproduccion.php"><img src="../IMG/7.jpg" alt=""></a>
            </div>
            <div class="swiper-slide">
                <a href="../Vista/Reproduccion.php"><img src="../IMG/8.jpg" alt=""></a>
            </div>
            <div class="swiper-slide">
                <a href="../Vista/Reproduccion.php"><img src="../IMG/9.jpg" alt=""></a>
            </div>
            <div class="swiper-slide">
                <a href="../Vista/Reproduccion.php"><img src="../IMG/10.jpg" alt=""></a>
            </div>

        </div>
    
    </div>
    <img src="../IMG/flecha.png" alt="" class="custom-next" id="custom-next">

    </section>

    <footer class="footer container">

        <h3>Capricornio</h3>

        <ul>
           <li><a href="../Vista/navegacion.php">Inicio</li>
           <li><a href="../Vista/NavegacionNuevo.php">Nuevo</li>
           <li><a href="../Vista/NavegacionPopular.php">Popular</li>
           <li><a href="">Random</li>
        </ul>
        
    </footer>
    <script src="../JS/PopularDesplegable.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../JS/PopularModal.js"></script>
    <script src="../JS/PopularUsuario.js"></script>
    <script src="../JS/PopularMenu.js"></script>
    <script src="../JS/PopularCarrusel.js"></script>
</body>
</html>
';
?>

