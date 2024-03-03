<?php
include("conexion/conexion.php");

//Obtenemos nuestros datos de nuestro index.php
session_start();

//Redireccionamos a index 
header("login.php");
$usuario = $_POST['txtNombre'];
$contra = $_POST['txtPassworde'];

//Comenzamos la sesion con sesion start
session_start();

//Si no se inicializa session_star(, no existen las variables $_SESSION

$_SESSION['txtNombre'] = $usuario;

//Hacemos una consulta
$consulta = "SELECT * FROM usuarios where nombre = '$usuario' and passworde = '$contra'";
//Va a almacenar nuestra conexion
$resultado=mysqli_query($conectar,$consulta);
//Almacena el resultado para validar
$filas=mysqli_num_rows($resultado);

if($filas){
#Redirecciona a login
header("location:login.php");


}else{
    #Si no que nos redireccione a 
    include("inicio.php");

    ?>
    <div class="alert alert-danger" role="alert"></div>
    <strong>Error al autentificar</strong>
</div>

<?php
}

mysqli_free_result($resultado);
mysqli_close($conectar);

?>