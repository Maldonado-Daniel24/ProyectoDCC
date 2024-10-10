<?php
echo'
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../CSS/Subir.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../Controlador/bd.php">

</head>


<body>
 <div class=Encabezado>
 <a href="../Vista/navegacionadmin.php" class="logoAdmin">Capricornio</a>
 <div class="BarraBuscar">
    <input type="text" class="Barra_Buscar" id="Barra_Buscar" placeholder="Buscar. . .">
    <button class="btn_buscar">Buscar</button>
    </div>
    <form action="../Vista/SubirEditar.php" method="get">
    <button id="emergencyButton" class="Subir"><i class="fa-solid fa-plus"></i></button>
</form>
</body>
</html>
';

?>

