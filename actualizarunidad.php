<?php
    require("conexion/conexion.php");
    $id_unidad = $_POST["txtId"];
    $nombre_unidad = $_POST["txtNombreUnidad"];

    $consulta = "UPDATE unidad
    SET unidad.nombre_unidad = '$nombre_unidad'
    WHERE id_unidad = '$id_unidad'";

    if(mysqli_query($conectar, $consulta)){
        header("location:unidad.php");
    }else{
        echo "Problemas al actualizar al area, consulte con el administrador";
    }
    mysqli_close($conectar);
?>