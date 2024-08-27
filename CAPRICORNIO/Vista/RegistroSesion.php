<?php

include("../Controlador/RegistrarSesion.php");
echo'
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/proyectodcc/CAPRICORNIO/CSS/IniciarSession.css">
</head>
    <h1 class="Re1">REGISTRO DE USUARIO</h1>
    

    <form action="../Controlador/RegistrarSesion.php" method="post">
        <label for="NombreUsuario" class="NombreUsuario2">Nombre del Usuario:</label><br>
        <input type="text" name="NombreUsuario" placeholder="Usuario" id="NombreUsuario" class="NombreUsuario"><i class="bx bxs-user" style="color:#f1cf54"></i><br>
        <label for="ContraseñaUsuario" class="ContraseñaUsuario2">Contraseña:</label><br>
        <input type="number" name="ContraseñaUsuario" placeholder="Contraseña" id="ContraseñaUsuario" class="ContraseñaUsuario"><i class="bx bxs-lock-alt" style="color:#f1cf54" ></i><br>
        <button type="submit"class="registro">Registrar Usuario</button><br>
    </form>';

 
    ?>