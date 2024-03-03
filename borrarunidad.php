<?php
    require("conexion/conexion.php");
    $id = $_GET["id"];

    $consulta = "CALL proc_actualizarunidad($id)";

    if(mysqli_query($conectar, $consulta)){
        header("location:unidad.php");
    }else{
        echo "Problemas al actualizar al area, consulte con el administrador";
    }
    mysqli_close($conectar);
?>