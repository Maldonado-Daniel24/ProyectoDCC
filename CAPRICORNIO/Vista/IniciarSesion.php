<?php
session_start();
if(isset($_SESSION['usuario'])){
    echo'
    <script>
    window.onload = function() {
        window.location.href = "http://127.0.0.1/proyectodcc/capricornio/Vista/navegacionadmin.php"; 
    };
</script>';      
}
If(!empty($_GET["men"]))
{
    echo "<h1 class='cred'>". $_GET["men"] ."</h1>";
};



If(!isset($_SESSION['loggedin'])){

    echo'
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../CSS/IniciarSesion.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>';
    echo '
    <div class= "iniciar">
    <form action="../index.php" method="get">
    <button class="Btn_Regresar"><i class="fa-solid fa-xmark"></i></button>
    </form>
    <h1 class="IniciarT">INICIAR SESIÓN</h1>
    <form action="../Controlador/Autenticacion.php" method="post"><br>
    <label for="NombreUsuario" class="NombreUsuarioI1" >Nombre del Usuario:</label><br>
    <input type="text" name="NombreUsuario" placeholder="Usuario" id="NombreUsuario" required class="NombreUsuarioI2"><i class="bx bxs-user"></i><br>
    <label for= "ClaveUsuario" class="ClaveUsuarioI1">Contraseña:</label><br>
    <input type="password" name="ClaveUsuario" placeholder="Contraseña" id="ClaveUsuario" required class="ClaveUsuarioI2"><i class="bx bxs-lock-alt"></i><br>
    <input type="submit" class="IniciarT2"value="Iniciar Sesión">
    </form> 
    </form>
    
    </div>
    ';}                                                           
else{
    
 echo '<br><a href="../Vista/CerrarSesion.php">Cerrar Sesion</a>';
 header("Location: ../Vista/navegacion.php");

}



?>