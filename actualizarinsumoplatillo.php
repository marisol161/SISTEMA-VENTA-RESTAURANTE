<?php
    require("conexion/conexion.php");
    $id_insumoPlatillo = $_POST["txtId"];
    $id_pla = $_POST["cmbPlatillo"];
    $id_insu = $_POST["cmbInsumo"];
    $cantidad_insumos = $_POST["txtCantidad"];
    
    $consulta = "UPDATE insumoplatillo
    SET insumoplatillo.id_pla = '$id_pla',
    insumoplatillo.id_insu = '$id_insu',
    insumoplatillo.cantidad_insumos = '$cantidad_insumos'
    WHERE id_insumoPlatillo = '$id_insumoPlatillo'";

    if(mysqli_query($conectar, $consulta)){
        header("location:insumoplatillo.php");
    }else{
        echo "Problemas al actualizar al area, consulte con el administrador";
    }
    mysqli_close($conectar);
?>