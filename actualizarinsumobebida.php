<?php
    require("conexion/conexion.php");
    $id_insumoBebida = $_POST["txtId"];
    $id_bebida = $_POST["cmbBebida"];
    $id_insumos = $_POST["cmbInsumo"];
    $cantidadinsumoBebida = $_POST["txtCantidad"];
    
    $consulta = "UPDATE insumobebida
    SET insumobebida.id_bebida = '$id_bebida',
    insumobebida.id_insumos = '$id_insumos',
    insumobebida.cantidad_insumoBebida = '$cantidadinsumoBebida'
    WHERE id_insumoBebida = '$id_insumoBebida'";

    if(mysqli_query($conectar, $consulta)){
        header("location:insumobebida.php");
    }else{
        echo "Problemas al actualizar al area, consulte con el administrador";
    }
    mysqli_close($conectar);
?>