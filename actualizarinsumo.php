<?php
    require("conexion/conexion.php");
    $id_insumos = $_POST["txtId"];
    $nombre_insumo = $_POST["txtNombreInsumo"];
    $cantidad_insumo = $_POST["txtCantidadInsumo"];
    $id_unidad = $_POST["cmbUnidad"];
    
    $consulta = "UPDATE insumos
    SET insumos.nombre_insumo = '$nombre_insumo',
    insumos.cantidad_insumo = '$cantidad_insumo',
    insumos.id_unidad = '$id_unidad'
    WHERE id_insumos = '$id_insumos'";

    if(mysqli_query($conectar, $consulta)){
        header("location:insumo.php");
    }else{
        echo "Problemas al actualizar al area, consulte con el administrador";
    }
    mysqli_close($conectar);
?>