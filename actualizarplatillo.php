<?php
    require("conexion/conexion.php");
    $id_platillo = $_POST["txtId"];
    $nombre_platillo = $_POST["txtNombrePlatillo"];
    $precio_platillo = $_POST["txtPrecioPlatillo"];
    $descripcion_platillo = $_POST["txtDescripcion"];
    
    $consulta = "UPDATE platillo
    SET platillo.nombre_platillo = '$nombre_platillo',
    platillo.precio_platillo = '$precio_platillo',
    platillo.descripcion_platillo = '$descripcion_platillo'
    WHERE id_platillo = '$id_platillo'";

    if(mysqli_query($conectar, $consulta)){
        header("location:platillo.php");
    }else{
        echo "Problemas al actualizar al area, consulte con el administrador";
    }
    mysqli_close($conectar);
?>