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
             <img src="../IMG/IMG-USUARIO.png" class="usuario"><h4>Cristian</h4><a href="" class="modal-c" "id="btn-cerrar-modal"><img src="../IMG/close-icon.png" ></a>
             </section>
             <hr class="linea-usuario">
             <section class="cierre-usuario">
             <img src="../IMG/LogOut.png" class="logout"><a href="../Vista/CerrarSesion.php" class="cerrar-sesion">Cerrar Sesion</a><br>
             </section>
            </dialog>
        </div>
    </header>
    <section class="portada">
    <h1 class="Titulo">Espectral</h1>
    <img src="../IMG/6.jpg" class="poster">
    </section>
    <section class="contenido">
    <video width="600" controls>
    <source src="../IMG2/Spectral .mp4" class="trailer" "type="video/mp4">
    Tu navegador no soporta el elemento de video.
    </video>

    <h2>Spectral es una película estadounidense en 3D de ciencia ficción y acción dirigida por Nic Mathieu. La historia trata sobre un científico enviado al frente de guerra en Europa del Este para intentar esclarecer las misteriosas muertes de algunos soldados a manos de entidades similares a fantasmas que solo pueden ser vistos gracias a unas gafas de su invención. </h2>
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
    <script src="../JS/PopularModal.js"></script>
    <script src="../JS/PopularUsuario.js"></script>
    <script src="../JS/PopularMenu.js"></script>
</body>
</html>
';
?>

.