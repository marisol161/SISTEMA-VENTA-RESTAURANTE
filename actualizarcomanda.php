<?php
    require("conexion/conexion.php");
    $id_comanda = $_POST["txtId"];
    $total_comanda = $_POST["txtTotalComanda"];
    $fecha_comanda = $_POST["txtFechaComanda"];
    
    $consulta = "UPDATE comanda
    SET comanda.total_comanda = '$total_comanda',
    comanda.fecha_comanda = '$fecha_comanda'
    WHERE id_comanda = '$id_comanda'";

    if(mysqli_query($conectar, $consulta)){
        header("location:comanda.php");
    }else{
        echo "Problemas al actualizar al area, consulte con el administrador";
    }
    mysqli_close($conectar);
?>