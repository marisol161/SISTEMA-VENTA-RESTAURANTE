<?php
    require("conexion/conexion.php");
    $id_mesa = $_POST["txtId"];
    $tipo_mesa = $_POST["txtTipoMesa"];

    $consulta = "UPDATE mesa
    SET mesa.tipo_mesa = '$tipo_mesa'
    WHERE id_mesa = '$id_mesa'";

    if(mysqli_query($conectar, $consulta)){
        header("location:mesa.php");
    }else{
        echo "Problemas al actualizar al area, consulte con el administrador";
    }
    mysqli_close($conectar);
?>