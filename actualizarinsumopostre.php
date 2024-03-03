<?php
    require("conexion/conexion.php");
    $id_insumopostre = $_POST["txtId"];
    $id_post = $_POST["cmbPostre"];
    $id_in = $_POST["cmbInsumo"];
    $cantidad_insumosPostre = $_POST["txtCantidad"];
    
    $consulta = "UPDATE insumopostre
    SET insumopostre.id_post = '$id_post',
    insumopostre.id_in = '$id_in',
    insumopostre.cantidad_insumosPostre = '$cantidad_insumosPostre'
    WHERE id_insumopostre = '$id_insumopostre'";

    if(mysqli_query($conectar, $consulta)){
        header("location:insumopostre.php");
    }else{
        echo "Problemas al actualizar al area, consulte con el administrador";
    }
    mysqli_close($conectar);
?>