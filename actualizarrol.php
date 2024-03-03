<?php
    require("conexion/conexion.php");
    $id_rol = $_POST["txtId"];
    $rol = $_POST["txtNombreRol"];
    $descripcion = $_POST["txtDescripcion"];
    
    $consulta = "UPDATE rol
    SET rol.rol = '$rol',
    rol.descripcion = '$descripcion'
    WHERE id_rol = '$id_rol'";

    if(mysqli_query($conectar, $consulta)){
        header("location:rol.php");
    }else{
        echo "Problemas al actualizar al area, consulte con el administrador";
    }
    mysqli_close($conectar);
?>