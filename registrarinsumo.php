<?php
    $nombre_insumo = $_POST['txtNombreInsumo'];
    $cantidad_insumo = $_POST['txtCantidadInsumo'];
    $id_unidad = $_POST['cmbUnidad'];

    $consulta = "CALL proc_insertarinsumo(
        '$nombre_insumo', '$cantidad_insumo', '$id_unidad', 1)";

        include("Conexion/conexion.php");
        if(mysqli_query($conectar, $consulta)){
            header("location:insumo.php");
        }else{
            echo "Problemas";
            echo "<br>Consulte";
        }
        mysqli_close($conectar);
?>