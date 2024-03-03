<?php
    include("conexion/conexion.php");
    session_start();
    $usuario = $_POST['txtNombre'];
    $clave = $_POST['txtPassworde'];

    $login = "SELECT COUNT(*) AS contar FROM usuario WHERE nombre = '$usuario' AND passworde = '$clave'";
    $consulta = mysqli_query($conectar, $login);

    $array = mysqli_fetch_array($consulta);
    
    if($array['contar']>0){
        header("location:inicio.php");
    }else{
        header("location:login.php");
    }
?>