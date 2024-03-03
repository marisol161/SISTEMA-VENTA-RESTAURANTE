<?php
    require("conexion/conexion.php");
    $id_bebida = $_POST["txtId"];
    $nombre_bebida = $_POST["txtNombreBebida"];
    $precio_bebida = $_POST["txtPrecioBebida"];
    $descripcion_bebida = $_POST["txtDescripcion"];
    
    $consulta = "UPDATE bebida
    SET bebida.nombre_bebida = '$nombre_bebida',
    bebida.precio_bebida = '$precio_bebida',
    bebida.descripcion_bebida = '$descripcion_bebida'
    WHERE id_bebida = '$id_bebida'";

    if(mysqli_query($conectar, $consulta)){
        header("location:bebida.php");
    }else{
        echo "Problemas al actualizar al area, consulte con el administrador";
    }
    mysqli_close($conectar);
?>