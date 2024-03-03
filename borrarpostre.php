<?php
    require("conexion/conexion.php");
    $id = $_GET["id"];

    $consulta = "CALL proc_actualizarpostre($id)";

    if(mysqli_query($conectar, $consulta)){
        header("location:postre.php");
    }else{
        echo "Problemas al actualizar al area, consulte con el administrador";
    }
    mysqli_close($conectar);
?>