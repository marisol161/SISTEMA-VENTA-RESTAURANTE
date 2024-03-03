<?php
    $tipo_mesa = $_POST['txtTipoMesa'];

    $consulta = "CALL proc_insertarmesa(
        '$tipo_mesa', 1)";

        include("Conexion/conexion.php");
        if(mysqli_query($conectar, $consulta)){
            header("location:mesa.php");
        }else{
            echo "Problemas";
            echo "<br>Consulte";
        }
        mysqli_close($conectar);
?>