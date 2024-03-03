<?php
    $nombre_bebida = $_POST['txtNombreBebida'];
    $precio_bebida = $_POST['txtPrecioBebida'];
    $descripcion_bebida = $_POST['txtDescripcion'];

    $consulta = "CALL proc_insertarbebida(
        '$nombre_bebida', '$precio_bebida', '$descripcion_bebida', 1)";

        include("Conexion/conexion.php");
        if(mysqli_query($conectar, $consulta)){
            header("location:bebida.php");
        }else{
            echo "Problemas";
            echo "<br>Consulte";
        }
        mysqli_close($conectar);
?>