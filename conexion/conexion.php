<?php
    $servidor = "localhost";
    $usuario = "root";
    $contrasenia = "";
    $baseDatos= "restaurante";

    $conectar = mysqli_connect($servidor,
    $usuario,
    $contrasenia,
    $baseDatos)
                                            
    OR DIE ("problemas al conectar con el servidor de datos");
   /* if ($conectar){
        echo "LA CONEXION ES CORRECTA";
    }else{
        echo"PROBLEMAS AL CONECTAR CON EL SERVIDOR :(";
    }*/
                                            
?>