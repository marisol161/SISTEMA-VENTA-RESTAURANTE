

<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Encabezado y estilos -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <title>Personal</title>
</head>
<body>
    <!-- Contenido principal -->

    <center>
        <h1>Usuarios</h1></center>
        <a title='Inicio'class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="inicio.php">
  <svg class="bi" aria-hidden="true"><use xlink:href="#clipboard"></use></svg><img src='img/house.png' width='40' height='40'>
</a>  
<br><br>
        <div class="container">
        <form action="registrarusuario.php" method="post">
       
        <div class="row">
        
            <div class="col   col-sm-12 col-md-9 col-lg-9">
            <label>Nombre Usuario:</label>
            <input type="text" class="form-control" placeholder="Ejemplo: Juan" name="txtNombreUsuario"> <br>
            </div>
            <div class="col   col-sm-12 col-md-6 col-lg-6">
            <label>Apellido Paterno:</label>
            <input type="text" name="txtApe1" class="form-control" placeholder="Ejemplo: Perez"><br>
            </div>
       
            <div class="col   col-sm-12 col-md-6 col-lg-6">
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
<iframe>
       <div class="table-responsive">
        <center>
        <table class="table table-striped" border="1" >
            <thead class= "table-dark">
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Primer apellido</th>
                <th>Segundo apellido</th>
                <th>Nickname</th>
                <th>Password</th>
                <th>E-mail</th>
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
    <td><a title='Editar' href='modalN.php?id=".$registroUsuario["id_usuario"]."'><button type='button' class='btn btn-primary' data-toggle='modal' data-target='#modalContenedor'><img src='img/editar.png' width='20' height='20'></button></a></td>
    <td><a title='Eliminar' href='modalElimnar.php?id=".$registroUsuario["id_usuario"]."'><button type='button' class='btn btn-danger' data-toggle='modal' data-target='#deleteChildresn'><img src='img/basura.png' width='20' height='20'></button></a></td>
</tr><br>";

        }
        mysqli_close($conectar);
        ?>

</table>

</iframe>
        </center> 
        </div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
      $('#modalContenedor').modal('show');
      $('#modalContenedor').load('user1.php');
    });
</script>

        
</body>
</html>

<!--<a title='Borrar' href='borrarusuario.php?id=".$registroUsuario["id_usuario"]."'><button type='button' class='btn btn-danger'><img src='img/basura.png' width='20' height='20'></button></a> -->




