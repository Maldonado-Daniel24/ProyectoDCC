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
       
        ;}
echo'
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../CSS/NewStyle.css">
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
                <li><a href="../Vista/navegacionadmin.php">Inicio</a></li>
                <li><a href="../Vista/NavegacionNuevoAdmin.php">Nuevo</a></li>
                <li><a href="../Vista/NavegacionPopularAdmin.php">Popular</a></li>
                <li><a href="">Random</a></li>
                <li><a href="../Vista/navegacionsubir.php">Subir</a></li>
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
          <div class="header-1" id="header-1">
            <img src="../IMG/joker.png" alt="">
            <a href="#" class="btn-2">Ver ahora</a>
        </div>
        <div class="header-2">
            <h1>No te pierdas <br>de nada</h1>
            <img src="../IMG/play.png" alt="">
          </div>
        </div>      
    </header>

    <section class="movies container">
     
       <h2>De las Últimas 24 Horas</h2>
       <hr class="linea-1">

        <div class="n-box-container-1">

            <div class="n-box-1">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/1.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="n-box-1">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/2.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="n-box-1">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/3.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="n-box-1">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/4.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="n-box-1">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/5.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="n-box-1">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/6.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="n-box-1">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/7.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="n-box-1">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/8.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>
        </div>

        <div class="load-more" id="n-load-more-1">Cargar más</div>

    </section>

    <section class="movies container">
     
       <h2>De la Última Semana</h2>
       <hr class="linea-2">

        <div class="n-box-container-2">

            <div class="n-box-2">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/9.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="n-box-2">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/10.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="n-box-2">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/11.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="n-box-2">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/12.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="n-box-2">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/13.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="n-box-2">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/14.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="n-box-2">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/15.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="n-box-2">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/16.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>
        </div>

        <div class="load-more" id="n-load-more-2">Cargar más</div>

    </section>

     <section class="movies container">
     
       <h2>Del Último Mes</h2>
       <hr class="linea-3">

        <div class="n-box-container-3">

            <div class="n-box-3">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/17.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="n-box-3">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/18.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="n-box-3">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/19.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="n-box-3">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/20.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="n-box-3">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/21.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="n-box-3">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/22.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="n-box-3">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/23.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="n-box-3">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/24.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>
        </div>

        <div class="load-more" id="n-load-more-3">Cargar más</div>

    </section>

     <section class="movies container">
     
       <h2>De Este Año</h2>
       <hr class="linea-4">

        <div class="n-box-container-4">

            <div class="n-box-4">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/17.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="n-box-4">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/18.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="n-box-4">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/19.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="n-box-4">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/20.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="n-box-4">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/21.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="n-box-4">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/22.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="n-box-4">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/23.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>

            <div class="n-box-4">
                <div class="content">
                   <a href="../Vista/Reproduccion.php"><img src="../IMG/24.jpg" alt=""></a>
                   <h3>Película HD</h3>
                   <p>
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                   </p>
                </div>
            </div>
        </div>

        <div class="load-more" id="n-load-more-4">Cargar más</div>

    </section>
    
    <footer class="footer container">

        <h3>Capricornio</h3>

        <ul>
           <li><a href="../Vista/navegacionadmin.php">Inicio</li>
           <li><a href="../Vista/NavegacionNuevoAdmin.php">Nuevo</li>
           <li><a href="../Vista/NavegacionPopularAdmin.php">Popular</li>
           <li><a href="">Random</li>
           <li><a href="../Vista/navegacionsubirAdmin.php">Subir</a></li>
        </ul>
        
    </footer>
    <script src="../JS/NuevoModal.js"></script>
    <script src="../JS/NuevoUsuario.js"></script>
    <script src="../JS/NuevoMenu.js"></script>
    <script src="../JS/NuevoScript.js"></script>
</body>
</html>
';
?>

