<?php
    require("conexion/conexion.php");
    $id = $_GET["id"];

    $consulta = "CALL proc_actualizarinsumopostre($id)";

    if(mysqli_query($conectar, $consulta)){
        header("location:insumopostre.php");
    }else{
        echo "Problemas al actualizar al area, consulte con el administrador";
    }
    mysqli_close($conectar);
?>