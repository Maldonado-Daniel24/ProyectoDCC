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
echo'
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../CSS/IniciarSesion.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
    
    
     <div class="RegistroClass">
     <form action="../index.php" method="get">
     <button class="Btn_Regresar"><i class="fa-solid fa-xmark"></i></button>
     </form>
     <h1 class="Re1">REGISTRO DE USUARIO</h1>
    <form action="../Controlador/RegistrarSesion.php" method="POST">
        <label for="NombreUsuario" class="NombreUsuario2">Nombre del Usuario:</label><br>
        <input type="text" name="NombreUsuario" placeholder="Usuario" id="NombreUsuario" class="NombreUsuario" required><i class="bx bxs-user" style="color:#f1cf54"></i><br>
        <label for="ContraseñaUsuario" class="ContraseñaUsuario2">Contraseña:</label><br>
        <input type="text" name="ContraseñaUsuario" placeholder="Contraseña" id="ContraseñaUsuario" class="ContraseñaUsuario" required><i class="bx bxs-lock-alt" style="color:#f1cf54" ></i><br>
        <label for="ContraseñaUsuario" class="ContraseñaUsuario2">Confirmar Contraseña:</label><br>
        <input type="text" name="ConfiContraseñaUsuario" placeholder="Confirmar contraseña" id="ContraseñaUsuario" class="ContraseñaUsuario2" required><i class="bx bxs-lock-alt" style="color:#f1cf54" ></i><br>
        <button type="submit"class="registro">Registrar Usuario</button><br>
    </form>
    <div>';
 
    ?>.