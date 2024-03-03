<?php
    $id_pla = $_POST['cmbPlatillo'];
    $id_insu = $_POST['cmbInsumo'];
    $cantidad = $_POST["txtCantidad"];

    $consulta = "CALL proc_insertarinsumoplatillo(
        '$id_pla', '$id_insu', '$cantidad', 1)";

        include("Conexion/conexion.php");
        if(mysqli_query($conectar, $consulta)){
            header("location:insumoplatillo.php");
        }else{
            echo "Problemas";
            echo "<br>Consulte";
        }
        mysqli_close($conectar);
?>