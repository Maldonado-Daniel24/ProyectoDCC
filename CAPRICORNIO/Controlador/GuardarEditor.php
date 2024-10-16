<?php
include("../Controlador/bd.php");

if (isset($_FILES['image'])) {
    
    include("../Controlador/bd.php");
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $categoria = $_POST['categoria'];
    $etiquetas = $_POST['etiquetas'];
    //subida img
    $filename = $_FILES['image']['name'];
    $fileTmpPath = $_FILES['image']['tmp_name'];
    $uploadFileDir = '../IMG2/';
    
    //subida vid
    $filename2 = $_FILES['media']['name'];
    $fileTmpPath2 = $_FILES['media']['tmp_name'];
    $uploadFileDir2 = '../IMG2/';

    $dest_path = $uploadFileDir . $filename;
    $dest_path2 = $uploadFileDir2 . $filename2;

    if (move_uploaded_file($fileTmpPath, $dest_path)) {
        $mimeType = $_FILES['image']['type'];
        // Guardar la ruta en la base de datos


     if (move_uploaded_file($fileTmpPath2, $dest_path2)) {
        $mimeType2 = $_FILES['media']['type'];
        // Guardar la ruta en la base de datos
        $Consulta = "INSERT INTO contenido(NOMBRE, SINOPSIS, CATEGORIA, PLATAFORMAS, filepath, filename, mime_type, filepath2, filename2, mime_type2) VALUE('$titulo', '$descripcion', '$categoria', '$etiquetas', '$dest_path', '$filename', '$mimeType', '$dest_path2', '$filename2', '$mimeType2')";

        $resultado = mysqli_query($Conexion,$Consulta);

     if($resultado){
     echo "<script>alert('se ha registrado la pelicula con exito');window.location.href='../Vista/navegacionsubir.php'</script>";
     }
     else{
     echo "<script>alert('No se pudo registrar')window.location.href='../Vista/navegacionsubir.php';</script>";
    }
    }

 }
}


$conn->close();
?>

