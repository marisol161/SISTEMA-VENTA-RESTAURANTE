<?php
    $nombre_unidad = $_POST['txtNombreUnidad'];

    $consulta = "CALL proc_insertarunidad(
        '$nombre_unidad', 1)";

        include("Conexion/conexion.php");
        if(mysqli_query($conectar, $consulta)){
            header("location:unidad.php");
        }else{
            echo "Problemas";
            echo "<br>Consulte";
        }
        mysqli_close($conectar);
?>