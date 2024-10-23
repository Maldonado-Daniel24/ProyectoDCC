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
else{
include("Vista/InicioRegistro.php");}

?>
