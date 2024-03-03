<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Personal    </title>
</head>
<body>
<center><h1>Personal del Restaurante</h1></center>
<br><br>
<a title='Inicio'class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="index.php">
  <svg class="bi" aria-hidden="true"><use xlink:href="#clipboard"></use></svg><img src='img/house.png' width='40' height='40'>
</a>  
<br></br>

<div class="container">
    <div class="row">

  
        <table class="table table-striped" border="2" >
            <tr>
              <div class="col col-sm-1"> <th>Clave Usuario</th></div> 
              <div class="col col-sm-2"><th>Nombre Usuario</th></div> 
              <div class="col col-sm-2"><th>Apellido Paterno</th></div> 
              <div class="col col-sm-2"><th>Apellido Materno</th></div> 
              <div class="col col-sm-1"><th>Nickname</th></div> 
              <div class="col col-sm-1"> <th>Password</th></div> 
              <div class="col col-sm-2"><th>Email</th></div> 
              <div class="col col-sm-1"> <th>Rol</th></div> 
            </tr>
        
        <?php
        include("conexion/conexion.php");
        $consultaUsuario = "SELECT usuario.id_usuario, nombre,apellido1, 
        apellido2, usuario.nickname, usuario.passworde, usuario.email, rol.rol
        FROM usuario INNER JOIN rol ON usuario.id_rol = rol.id_rol
        WHERE usuario.estatus = 1";
        $usuario = mysqli_query($conectar,$consultaUsuario);
        while ($registroUsuario = mysqli_fetch_assoc($usuario)) {
            echo "<tr>
          <td>" .  $registroUsuario["id_usuario"] .  "</td>" .
          "<td>".  $registroUsuario["nombre"] .  "</td>" .
          "<td>".  $registroUsuario["apellido1"] . "</td>" .
          "<td>".  $registroUsuario["apellido2"] . "</td>" .  
          "<td>".  $registroUsuario["nickname"] . "</td>" .  
          "<td>".  $registroUsuario["passworde"] . "</td>" .
          "<td>".  $registroUsuario["email"] . "</td>" .
          "<td>" . $registroUsuario["rol"] . "</td>" . 
          "<td><a title='Editar' href='frm_editarusuario.php?id=".$registroUsuario["id_usuario"]."'><img src='img/editar.png' width='20' height='20'></a></td>" . 
          "<td><a title='Borrar' href='borrarusuario.php?id=".$registroUsuario["id_usuario"]."'><img src='img/trash.png' width='20' height='20'></a></td>" . 
          "</tr><br>"; 
        }
        mysqli_close($conectar);
        ?>
        </table>
        </div>
    </div>
</body>
</html>