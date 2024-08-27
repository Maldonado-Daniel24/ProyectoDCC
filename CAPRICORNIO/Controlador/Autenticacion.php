<?php

session_start();

include("bd.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Inicio= htmlspecialchars($_POST['Inicio']);
}
if(mysqli_connect_error()){
    exit("Fallo al conectarse a la base de datos ".mysqli_connect_error());
}

if(!isset($_POST["NombreUsuario"], $_POST["ClaveUsuario"])){
    header("Location: ../index.php");
}

if($Resultado = $Conexion->prepare('select NombreUsuario, ClaveUsuario, TipoUsuario from usuario where NombreUsuario= ?')){
    $Resultado->bind_param('s', $_POST["NombreUsuario"]);
    $Resultado->execute();
}

 $Resultado->store_result();
 if($Resultado->num_rows > 0) 
    $Resultado->bind_result($NombreUsuario, $ClaveUsuario, $TipoUsuario);
    $Resultado->fetch();
    if($_POST["ClaveUsuario"]==$ClaveUsuario){
        //Iniciar sesion
        $_SESSION['loggedin'] = True;
        $_SESSION['NombreUsuario'] = $_POST["NombreUsuario"];
        $_SESSION['TipoUsuario'] = $TipoUsuario;
        header("Location: ../vista/navegacion.php");
    }  

    header("Location: ../vista/iniciarsesion.php?men=Credenciales INCORRECTAS");
    
    


$Resultado->close(); 
 

?>