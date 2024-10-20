<?php
session_start();
include("../Controlador/bd.php");

$NombreUsuario = $_POST['NombreUsuario'];
$ClaveUsuario = $_POST['ClaveUsuario'];

$validar_login = mysqli_query($Conexion, "SELECT * FROM usuario WHERE NombreUsuario='$NombreUsuario' and ClaveUsuario='$ClaveUsuario' ");

if(mysqli_num_rows($validar_login) > 0){
    
    // Extraer el tipo de usuario
    $fila = mysqli_fetch_assoc($validar_login); // Obtener la fila resultante
    $TipoUsuario = $fila['TipoUsuario']; // Guardar el valor de TipoUsuario

    // Guardar el nombre de usuario en la sesión
    $_SESSION['usuario'] = $NombreUsuario;
    $_SESSION['TipoUsuario'] = $TipoUsuario;
    
    // Verificar el tipo de usuario y redirigir a la página correspondiente
    if($TipoUsuario == 2) {
        header("location: ../Vista/navegacionadmin.php"); // Redirige a la página de tipo de usuario 2
    } elseif($TipoUsuario == 0) {
        header("location: ../Vista/navegacion.php"); // Redirige a la página de tipo de usuario 0
    } else {
        header("location: ../index.php"); // Redirige a otra página si no es ni tipo 0 ni 2
    }
    
    exit();
} else {
    // Si el usuario no está registrado o las credenciales no coinciden
    echo '
    <script>
    alert("Este Usuario no está registrado, por favor verifique los datos introducidos");
    window.location="../index.php";
    </script>';
    exit();
}

?>