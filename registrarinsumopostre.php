<?php
    $id_post = $_POST['cmbPostre'];
    $id_in = $_POST['cmbInsumo'];
    $cantidad = $_POST["txtCantidad"];

    $consulta = "CALL proc_insertarinsumopostre(
        '$id_post', '$id_in', '$cantidad', 1)";

        include("Conexion/conexion.php");
        if(mysqli_query($conectar, $consulta)){
            header("location:insumopostre.php");
        }else{
            echo "Problemas";
            echo "<br>Consulte";
        }
        mysqli_close($conectar);
?>