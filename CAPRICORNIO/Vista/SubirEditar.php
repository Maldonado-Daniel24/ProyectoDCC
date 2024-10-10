<?php
echo'
<!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" href="../CSS/StyleEditar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../Controlador/bd.php">

</head>






';
?>

<body>

    <div class="contenedor_Editar">
    <form action="../Vista/navegacionsubir.php" method="get">
    <button class="Btn_Regresar"><i class="fa-solid fa-xmark"></i></button>
</form>
        <form action="" method="POST">
            <h1>Detalles</h1>
            <input type="text" placeholder="Titulo (Obligatorio)" class="titulo" name="titulo"><br>
            <input type="text" placeholder="Descripción" class="descripcion" name="descripcion">
            <h2>Portada</h2>
            <h4 class="Text_Img">Establece una imagen para tu portada</h4>
            <img src="../IMG/10.jpg" alt="" width="150" height="150">
            <h2 class="Generos">Genero</h2>
            <h4 class="Text_gen">Elige el genero de tu pelicula</h4>
            <form>
    <select class="Genero" id="Genero">
        <option>Acción</option>
        <option>Aventura</option>
        <option>Catástrofe</option>
        <option>Ciencia ficción</option>
        <option>Comedia</option>
        <option>Documental</option>
        <option>Drama</option>
        <option>Fantasía</option>
        <option>Terror</option>
    </select>
</form>
            <h2 class="platafor">Etiquetas</h2>
            <h4 class="Text_pla">Elige en que plataforma puedes encontrarlo</h4>
            <form>
    <select class="Genero" id="Etiquetas">
        <option>Netflix</option>
        <option>Amazon Prime Video</option>
        <option>Disney+</option>
        <option>HBO Max</option>
        <option>Rakuten TV</option>
        <option>Filmin</option>
        <option>Movistar Plus+</option>
        <option>Pluto TV</option>
        <option>Batanga</option>

    </select>
</form>
<video class="videoEditar" width="470px" height="270" controls>
<source src="../IMG/Video1.mp4" type="">
</video>
 
            <button class="btn_guardar">Guardar</button>
        </form>
    </div>
</body>

