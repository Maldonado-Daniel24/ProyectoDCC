<HTml>
<head>
<Script type="text/javascript">
    function confirmar(){
        return confirm('¿Esta Seguro?, se eliminarán todos los datos');
    }
</Script>
</head>


<?php
session_start();
if(!isset($_SESSION['usuario'])){
  echo'
        <script>
        alert("Por favor debes iniciar sesión");
        window.location ="../index.php";
        </script>';
       
        session_destroy();
        
        die();
}
if($_SESSION['TipoUsuario']== 0){
  echo'
        <script>
        
        window.location ="../Vista/navegacion.php";
        </script>';      
}
$id=$_GET['id'];
include("../Controlador/bd.php");

$sql="DELETE FROM contenido WHERE COD_CONTENIDO='".$id."'";
$resultado=mysqli_query($Conexion,$sql);

if($resultado){
    echo "<script language='JavaScript'>
    alert('Los datos se eliminaron correctamente');
    location.assign('../Vista/navegacionsubir.php');
    </script>";
}else{
    echo "<script language='JavaScript'>
    alert('Los datos NO se eliminaron correctamente');
    location.assign('../Vista/navegacionsubir.php');
    </script>";
}
?>

</HTml>