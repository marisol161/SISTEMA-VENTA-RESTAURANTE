<?php
    $nombre_platillo = $_POST['txtNombrePlatillo'];
    $precio_platillo = $_POST['txtPrecioPlatillo'];
    $descripcion_platillo = $_POST['txtDescripcion'];

    $consulta = "CALL proc_insertarplatillo(
        '$nombre_platillo', '$precio_platillo', '$descripcion_platillo', 1)";

        include("Conexion/conexion.php");
        if(mysqli_query($conectar, $consulta)){
            header("location:platillo.php");
        }else{
            echo "Problemas";
            echo "<br>Consulte";
        }
        mysqli_close($conectar);
?>