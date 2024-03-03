<?php
    $nombre = $_POST['txtNombreUsuario'];
    $apellido1 = $_POST['txtApe1'];
    $apellido2 = $_POST['txtApe2'];
    $nickname = $_POST['txtNickname'];
    $passworde = $_POST['txtPassword'];
    $email = $_POST['txtEmail'];
    $id_rol = $_POST['cmbRol'];

    $consulta = "CALL proc_insertarusuario(
        '$nombre', '$apellido1', '$apellido2', '$nickname', '$passworde', '$email', '$id_rol', 1)";

        include("Conexion/conexion.php");
        if(mysqli_query($conectar, $consulta)){
            header("location:user1.php");
        }else{
            echo "Problemas";
            echo "<br>Consulte";
        }
        mysqli_close($conectar);
?>