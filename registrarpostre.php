<?php
    $nombre_bebida = $_POST['txtNombrePostre'];
    $precio_bebida = $_POST['txtPrecioPostre'];
    $descripcion_bebida = $_POST['txtDescripcion'];

    $consulta = "CALL proc_insertarpostre(
        '$nombre_bebida', '$precio_bebida', '$descripcion_bebida', 1)";

        include("Conexion/conexion.php");
        if(mysqli_query($conectar, $consulta)){
            header("location:postre.php");
        }else{
            echo "Problemas";
            echo "<br>Consulte";
        }
        mysqli_close($conectar);
?>