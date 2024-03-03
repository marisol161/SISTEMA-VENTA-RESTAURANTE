<?php
    require("conexion/conexion.php");
    $id_postre = $_POST["txtId"];
    $nombre_postre = $_POST["txtNombrePostre"];
    $precio_postre = $_POST["txtPrecioPostre"];
    $descripcion_postre = $_POST["txtDescripcion"];
    
    $consulta = "UPDATE postre
    SET postre.nombre_postre = '$nombre_postre',
    postre.precio_postre = '$precio_postre',
    postre.descripcion_postre = '$descripcion_postre'
    WHERE id_postre = '$id_postre'";

    if(mysqli_query($conectar, $consulta)){
        header("location:postre.php");
    }else{
        echo "Problemas al actualizar al area, consulte con el administrador";
    }
    mysqli_close($conectar);
?>