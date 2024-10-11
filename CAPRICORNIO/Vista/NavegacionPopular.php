<?php
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
                <li><a href="../Vista/NavegacionRandom.php">Random</a></li>
             </ul>
            </nav>
            <a href="#" class="btn-1">Usuario</a>
        </div>
        <div class="header-content container">
          <div class="header-1">
            <img src="../IMG/venom.png" alt="">
            <a href="#" class="btn-2">Ver ahora</a>
        </div>
        <div class="header-2">
            <h1>Las mejores <br> películas</h1>
            <img src="../IMG/play.png" alt="">
          </div>
        </div>      
    </header>
<section class="carrusel">
    <div class="swiper mySwiper">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <img src="../IMG/1.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="../IMG/2.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="../IMG/3.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="../IMG/4.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="../IMG/5.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="../IMG/6.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="../IMG/7.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="../IMG/8.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="../IMG/9.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="../IMG/10.jpg" alt="">
            </div>

        </div>
        <button class="avance">→</button>>
    </div>

    </section>

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
    <script src="../JS/PopularMenu.js"></script>
    <script src="../JS/PopularScript.js"></script>
    <script src="../JS/PopularCarrusel.js"></script>
<a href="../Vista/CerrarSesion.php">Cerrar Sesion</a>
</body>
</html>
';
?>

