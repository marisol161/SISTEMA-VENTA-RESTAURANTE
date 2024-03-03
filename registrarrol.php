<?php
    $rol = $_POST['txtNombreRol'];
    $descripcion = $_POST['txtDescripcion'];

    $consulta = "CALL proc_insertarrol(
        '$rol', '$descripcion', 1)";

        include("Conexion/conexion.php");
        if(mysqli_query($conectar, $consulta)){
            header("location:rol.php");
        }else{
            echo "Problemas";
            echo "<br>Consulte";
        }
        mysqli_close($conectar);
?>