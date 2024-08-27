<?php

If(!empty($_GET["men"]))
{
    echo "<h1 class='cred'>". $_GET["men"] ."</h1>";
};

session_start();

If(!isset($_SESSION['loggedin'])){

    echo'
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/proyectodcc/CAPRICORNIO/CSS/IniciarSession.css">
</head>';
    echo '
    <h1 class="IniciarT">INICIAR SESIÓN</h1>
    <form action="../Controlador/Autenticacion.php" method="post"><br>
    <label for="NombreUsuario" class="NombreUsuarioI1" >Nombre del Usuario:</label><br>
    <input type="text" name="NombreUsuario" placeholder="Usuario" id="NombreUsuario" required class="NombreUsuarioI2"><i class="bx bxs-user"></i><br>
    <label for= "ClaveUsuario" class="ClaveUsuarioI1">Contraseña:</label><br>
    <input type="password" name="ClaveUsuario" placeholder="Contraseña" id="ClaveUsuario" required class="ClaveUsuarioI2"><i class="bx bxs-lock-alt"></i><br>
    <input type="submit" class="IniciarT2"value="Iniciar sesion">
    </form> 
    </form>
    ';}                                                           
else{
    
 echo '<br><a href="../Vista/CerrarSesion.php">Cerrar Sesion</a>';
 header("Location: ../Vista/navegacion.php");

}



?>