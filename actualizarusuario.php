<?php
    require("conexion/conexion.php");
    $id_usuario = $_POST["txtId"];
    $nombre = $_POST["txtNombreUsuario"];
    $apellido1 = $_POST["txtApe1"];
    $apellido2 = $_POST["txtApe2"];
    $nickname = $_POST["txtNickname"];
    $passworde = $_POST["txtPassword"];
    $email = $_POST["txtEmail"];
    $id_rol = $_POST["cmbRol"];
    
    $consulta = "UPDATE usuario
    SET usuario.nombre = '$nombre',
    usuario.apellido1 = '$apellido1',
    usuario.apellido2 = '$apellido2',
    usuario.nickname = '$nickname',
    usuario.passworde = '$passworde',
    usuario.email = '$email',
    usuario.id_rol = '$id_rol'
    WHERE id_usuario = '$id_usuario'";

    if(mysqli_query($conectar, $consulta)){
        header("location:user1.php");
    }else{
        echo "Problemas al actualizar al area, consulte con el administrador";
    }
    mysqli_close($conectar);
?>