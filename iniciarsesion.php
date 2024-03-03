<?php
include("conexion/conexion.php");

//Obtenemos los datos del formulario de inicio de sesión
$usuario = $_POST['txtNombre'];
$contra = $_POST['txtPassworde'];

//Comenzando la sesión con session_start()
session_start();
$_SESSION['txtNombre'] = $usuario;

//Hacemos una consulta para validar las credenciales
$consulta = "SELECT * FROM usuario WHERE nombre ='$usuario' AND passworde = '$contra'";
$resultado = mysqli_query($conectar, $consulta);
$filas = mysqli_num_rows($resultado);

if ($filas) {
    // Si las credenciales son correctas, obtenemos los datos del usuario
    $usuarioDatos = mysqli_fetch_assoc($resultado);
    $idRol = $usuarioDatos['id_rol'];
    
    if ($idRol == 1 || $idRol == 2) {
        // Si el id_rol es 1 o 2, redirecciona a inicio.php
        header("Location: inicio.php");
        exit;
    } elseif ($idRol == 3) {
        // Si el id_rol es 3, redirecciona a otra página en este caso inicio.php donde se vera que solo se le muestra comanda, detalle comanda y estado del pedido
        header("Location: inicio.php");
        exit;
    }
} else {
    // Si las credenciales son incorrectas, redirecciona a login.php con un parámetro de error
    header("Location: login.php?error=1");
    exit;
}

mysqli_free_result($resultado);
mysqli_close($conectar);
?>
