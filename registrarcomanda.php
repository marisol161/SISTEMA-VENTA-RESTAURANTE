<?php
    $total_comanda = $_POST['txtTotalComanda'];
    $fecha_comanda = $_POST['txtFechaComanda'];

    $consulta = "CALL proc_insertarcomanda(
        '$total_comanda', '$fecha_comanda', 1)";

        include("Conexion/conexion.php");
        if(mysqli_query($conectar, $consulta)){
            header("location:comanda.php");
        }else{
            echo "Problemas";
            echo "<br>Consulte";
        }
        mysqli_close($conectar);
?>