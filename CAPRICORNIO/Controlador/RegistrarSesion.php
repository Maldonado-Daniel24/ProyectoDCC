<?php 
if (!empty($_POST["ContraseñaUsuario"]) && !empty($_POST["NombreUsuario"])) {
     $ContraseñaUsuario = $_POST["ContraseñaUsuario"];
     $NombreUsuario = $_POST["NombreUsuario"];

     //print $Consulta;
     include("bd.php");      
     $Consulta= " INSERT INTO usuario (NombreUsuario, ClaveUsuario) VALUES ('".$NombreUsuario."', '".$ContraseñaUsuario."')"; 
     //print $Consulta;
     $Resultado=false;
     try {
     $Resultado= mysqli_query($Conexion, $Consulta);
    }
     catch (exception $e)
     {$Mensaje="No se pudo registrar al usuario por error en los datos";
        $error=$e->getMessage();
        print $e->getMessage();
        print $Resultado;
     } 
     if ($Resultado == false) { $Mensaje="No se pudo registrar al usuario";
        //die($mysqli_error($Conexion));
    }
     else {$Mensaje="El usuario se registro correctamente :D";}
     echo "<h2>" . $Mensaje . "</h2>";
     } //Fin del If

    ?>