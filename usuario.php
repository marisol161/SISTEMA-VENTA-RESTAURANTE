<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <title>Usuarios</title>
</head>
<body>
    <center>
        <h1>Usuarios</h1></center>
        <a title='Inicio'class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="inicio.php">
  <svg class="bi" aria-hidden="true"><use xlink:href="#clipboard"></use></svg><img src='img/house.png' width='40' height='40'>
</a>  
<br><br>
        <div class="container">
        <form action="registrarusuario.php" method="post">
       
        <div class="row">
        
            <div class="col   col-sm-4 col-md-9 col-lg-9">
            <label>Nombre Usuario:</label>
            <input type="text" class="form-control" placeholder="Ejemplo: Juan" name="txtNombreUsuario"> <br>
            </div>
            <div class="col   col-sm-4 col-md-6 col-lg-6">
            <label>Apellido Paterno:</label>
            <input type="text" name="txtApe1" class="form-control" placeholder="Ejemplo: Perez"><br>
            </div>
       
            <div class="col   col-sm-4 col-md-6 col-lg-6">
            <label>Apellido Materno:</label>
             <input type="text" name="txtApe2" class="form-control" placeholder="Ejemplo: Sosa"><br>
            </div>
            
        </div>
        <div class="row">
            <div class="col   col-sm-8 col-md-8 col-lg-8">
            <td><label>Nickname:</label></td>
                    <td><input type="text" name="txtNickname" class="form-control" placeholder="Ejemplo: Juan"></td><br>
            </div>
      
            <div class="col   col-sm-4 col-md-4 col-lg-4">
            <td><label>Password:</label></td>
                    <td><input type="password" name="txtPassword" class="form-control" placeholder="*******"></td><br>
            </div>
        </div>
        <div class="row">
            <div class="col   col-sm-8 col-md-9 col-lg-8">
            <td><label>Email:</label></td>
                    <td><input type="email" name="txtEmail" class="form-control" placeholder="ejemplo@gmail.com"></td><br>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
            <td><label>Rol:</label></td>
                    <td>
                        <select name="cmbRol" id="" class="form-control">
                            <option value="">Seleccione una opcion</option>
                            <?php
                                include("Conexion/conexion.php");
                                $consulta = "SELECT rol.id_rol, rol.rol FROM rol WHERE estatus = 1";
                                $rol = mysqli_query($conectar, $consulta);
                                while($regRol = mysqli_fetch_array($rol)){
                                    echo "<option value='" . $regRol[0] . "'>" . $regRol[1] . "</option> "; 
                                }
                            ?>
                        </select>
                    </td>
            </div>
        </div>
       
        
        
           <br><br>
           
            <div class="row">
            <center>
                <div class = 'col col-sm-8 col-md-6 col-lg-4'>
                <button type="submit" class="btn btn-outline-primary">Registrar Usuario</button>
                </div>
               
                </center>
            </div>
     
</form>
       <div class="table-responsive">
        <center>
        <table class="table table-striped" border="2" >
            <thead class= "table-dark">
            <tr>
                <th>Clave Usuario</th>
                <th>Nombre Usuario</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Nickname</th>
                <th >Password</th>
                <th>Email</th>
                <th>Rol</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
        </div>
        <?php
        include("conexion/conexion.php");
        $consultaUsuario = "SELECT usuario.id_usuario, usuario.nombre, usuario.apellido1, 
        usuario.apellido2, usuario.nickname, usuario.passworde, usuario.email, rol.rol
        FROM usuario INNER JOIN rol ON usuario.id_rol = rol.id_rol
        WHERE usuario.estatus = 1 and rol != 'CLIENTE'";
        $usuario = mysqli_query($conectar,$consultaUsuario);
        while ($registroUsuario = mysqli_fetch_assoc($usuario)) {
            echo "<tr>
    <td>" .  $registroUsuario["id_usuario"] .  "</td>
    <td>".  $registroUsuario["nombre"] .  "</td>
    <td>".  $registroUsuario["apellido1"] . "</td>
    <td>".  $registroUsuario["apellido2"] . "</td>  
    <td>".  $registroUsuario["nickname"] . "</td>  
    <td>".  $registroUsuario["passworde"] . "</td>
    <td>".  $registroUsuario["email"] . "</td>
    <td>" . $registroUsuario["rol"] . "</td> 
    <td>
        <button type='button' class='btn btn-primary' onclick=\"abrirModal('" . $registroUsuario["id_usuario"] . "')\">Editar</button>
    </td>
    <td>
        <a title='Borrar' href='borrarusuario.php?id=".$registroUsuario["id_usuario"]."'>
            <button type='button' class='btn btn-danger'>Eliminar</button>
        </a>
    </td>
</tr><br>";

        }
        mysqli_close($conectar);
        ?>
        </table>
        </div>
        </center> 
       


</body>
</html>