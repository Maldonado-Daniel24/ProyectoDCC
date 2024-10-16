<?php
echo'
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../CSS/Style.css">
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

    <section class="movies container">
     
       <h2>Películas del Momento</h2>
       <hr class="linea-1">

        <div class="box-container-1">

            <div class="box-1">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/1.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-1">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/2.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-1">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/3.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-1">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/4.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-1">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/5.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-1">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/6.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-1">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/7.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-1">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/8.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>
        </div>

        <div class="load-more" id="load-more-1">Cargar más</div>

    </section>

    <section class="movies container">
     
       <h2>Cine de Acción y Aventuras</h2>
       <hr class="linea-2">

        <div class="box-container-2">

            <div class="box-2">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/9.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-2">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/10.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-2">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/11.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-2">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/12.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-2">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/13.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-2">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/14.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-2">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/15.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-2">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/16.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>
        </div>

        <div class="load-more" id="load-more-2">Cargar más</div>

    </section>

     <section class="movies container">
     
       <h2>Cine de Terror</h2>
       <hr class="linea-3">

        <div class="box-container-3">

            <div class="box-3">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/17.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-3">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/18.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-3">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/19.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-3">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/20.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-3">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/21.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-3">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/22.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-3">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/23.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-3">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/24.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>
        </div>

        <div class="load-more" id="load-more-3">Cargar más</div>

    </section>

     <section class="movies container">
     
       <h2>Películas de Ciencia Ficción</h2>
       <hr class="linea-4">

        <div class="box-container-4">

            <div class="box-4">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/17.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-4">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/18.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-4">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/19.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-4">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/20.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-4">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/21.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-4">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/22.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-4">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/23.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-4">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/24.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>
        </div>

        <div class="load-more" id="load-more-4">Cargar más</div>

    </section>

    <section class="movies container">
     
       <h2>Películas de Comedia</h2>
       <hr class="linea-5">

        <div class="box-container-5">

            <div class="box-5">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/17.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-5">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/18.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-5">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/19.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-5">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/20.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-5">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/21.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-5">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/22.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-5">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/23.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-5">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/24.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>
        </div>

        <div class="load-more" id="load-more-5">Cargar más</div>

    </section>

    <section class="movies container">
     
       <h2>Series de Comedia</h2>
       <hr class="linea-6">

        <div class="box-container-6">

            <div class="box-6">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/17.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-6">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/18.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-6">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/19.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-6">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/20.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-6">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/21.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-6">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/22.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-6">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/23.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-6">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/24.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>
        </div>

        <div class="load-more" id="load-more-6">Cargar más</div>

    </section>

    <section class="movies container">
     
       <h2>Series de Anime</h2>
       <hr class="linea-7">

        <div class="box-container-7">

            <div class="box-7">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/17.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-7">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/18.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-7">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/19.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-7">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/20.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-7">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/21.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-7">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/22.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-7">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/23.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-7">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/24.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>
        </div>

        <div class="load-more" id="load-more-7">Cargar más</div>

    </section>

    <section class="movies container">
     
       <h2>TV de Misterio y Suspense</h2>
       <hr class="linea-8">

        <div class="box-container-8">

            <div class="box-8">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/17.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-8">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/18.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-8">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/19.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-8">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/20.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-8">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/21.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-8">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/22.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-8">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/23.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-8">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/24.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>
        </div>

        <div class="load-more" id="load-more-8">Cargar más</div>

    </section>

    <section class="movies container">
     
       <h2>Series Dramáticas</h2>
       <hr class="linea-9">

        <div class="box-container-9">

            <div class="box-9">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/17.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-9">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/18.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-9">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/19.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-9">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/20.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-9">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/21.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-9">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/22.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-9">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/23.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-9">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/24.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>
        </div>

        <div class="load-more" id="load-more-9">Cargar más</div>

    </section>

    <section class="movies container">
     
       <h2>Series de Ciencia Ficción</h2>
       <hr class="linea-10">

        <div class="box-container-10">

            <div class="box-10">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/17.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-10">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/18.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-10">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/19.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-10">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/20.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-10">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/21.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-10">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/22.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-10">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/23.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="box-10">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/24.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>
        </div>

        <div class="load-more" id="load-more-10">Cargar más</div>

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
    <script src="../JS/Script.js"></script>
    <script src="../JS/Menu.js"></script>
    <script src="../JS/Modal.js"></script>
    <script src="../JS/Usuario.js"></script>

</body>
</html>
';
?>

