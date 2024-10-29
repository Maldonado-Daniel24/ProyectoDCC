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
             
             <img src="../IMG/IMG-USUARIO.png" class="usuario">'; echo $_SESSION['usuario'] ;echo'<a href="" class="modal-c" "id="btn-cerrar-modal"><img src="../IMG/close-icon.png"></a>
             </section>
             <hr class="linea-usuario">
             <section class="cierre-usuario">
             <img src="../IMG/LogOut.png" class="logout"><a href="../Vista/CerrarSesion.php" class="cerrar-sesion">Cerrar Sesion</a><br>
             </section>
            </dialog>
        </div>
        <h1 class="titulo">Lo mas popular en<br> peliculas</h1>
        
    </header>



';
?>


<?php
include("../Controlador/bd.php");
$sql = "SELECT * FROM contenido ORDER BY Popular DESC";
$resultado = mysqli_query($Conexion, $sql);
$sql2 = "SELECT COUNT(*) AS total FROM contenido";
$resultado2 = mysqli_query($Conexion, $sql2);

if ($resultado2) {
    $fila = mysqli_fetch_assoc($resultado2);
    $totalPeliculas = $fila['total'];
}
else {
    echo "<p>Error al contar las películas.</p>";
}

 ?> <h1 class="tituloS"><?php echo "" . $totalPeliculas . " titulos ordenados por Popularidad";?></h1>
 <hr class="linearoja" style="border: none; border-top: 2px solid red; width: 30%;">
<?php


if ($resultado && mysqli_num_rows($resultado) > 0) {
    


echo "<div style='display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 10px; padding: 10px;'>";


    
while ($mostrar = mysqli_fetch_assoc($resultado)) {
$titulo = $mostrar["NOMBRE"];
$imagen = $mostrar["IMAGEN"];

echo "<div style='padding: 10px; text-align: center;'>";
        
        
if (!empty($imagen)) {?>
<?php echo"<a href='Reproduccion.php?id=".$mostrar['COD_CONTENIDO']."'>"?><img src="<?php echo $mostrar['IMAGEN']; ?>" alt="Imagen" width= "200px" height="300px"></a>
<?php
}    
echo "</div>";

}
echo "</div>";
}else {
echo "<p>No se encontraron películas.</p>";
}


?>
            
        
    
    
    

   

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


