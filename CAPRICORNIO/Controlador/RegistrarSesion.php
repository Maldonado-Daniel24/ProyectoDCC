<?php 

include("../Controlador/bd.php");

$NombreUsuario = $_POST['NombreUsuario'];
$ContraseñaUsuario = $_POST['ContraseñaUsuario'];
$Confirmar = $_POST['ConfiContraseñaUsuario'];

if($ContraseñaUsuario == $Confirmar){
$Consulta = "INSERT INTO usuario(NombreUsuario, ClaveUsuario) VALUES ('$NombreUsuario', '$ContraseñaUsuario')";

$Verificar = mysqli_query($Conexion, "SELECT * FROM usuario WHERE NombreUsuario='$NombreUsuario' ");

if(mysqli_num_rows($Verificar) > 0){
   echo'
   <script>
   alert("Este Usuario ya está registrado, intenta con otro diferente");
   window.location="../Vista/RegistroSesion.php";
   </script>';
   exit();
}

$Ejecutar = mysqli_query($Conexion, $Consulta);

if($Ejecutar){
   echo'
   <script>
   alert("Usuario registrado exitosamente");
   window.location="../Vista/navegacion.php";
   </script>';
   }else{
      echo'
   <script>
   alert("Usuario no se a registrado exitosamente");
   window.location="../index.php";
   </script>';
   }
   mysqli_close($Conexion);
}else{

   echo'
        <script>
        alert("Las contraseñas no coinciden");
        window.location ="../Vista/RegistroSesion.php";
        </script>';
       
        session_destroy();
        
        die();
}
?>