<?php
  require("conexion/conexion.php");

  // Verificar si se ha proporcionado el parámetro 'id' en la URL
  if (isset($_GET['id'])) {
    $id_usuario = $_GET['id'];

    $consulta = "SELECT * FROM usuario WHERE id_usuario = '$id_usuario'";
    $usuarios = mysqli_query($conectar, $consulta);
    $regUsuario = mysqli_fetch_array($usuarios);
  } else {
    // Manejar el caso en el que no se proporciona el parámetro 'id'
    echo "No se ha proporcionado un ID de usuario válido.";
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <title>Editar Personal</title>
</head>
<body>
  
<div class="modal fade" id="modalContenedor">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
    
      <!-- Encabezado del modal -->
      <div class="modal-header">
        <h4 class="modal-title">Editar personal</h4>
  <a href="user1.php"><button type="button" class="close" data-dismiss="modal">&times;</button></a> 




      </div>
      
      <!-- Cuerpo del modal -->
      <div class="modal-body">
      
        <form action="actualizarusuario.php" method="post">
      
          <div class='row'>
            <div class="form-group col-md-6">
              <input type="hidden" name="txtId" value="<?php echo $id_usuario; ?>">  
            </div>
          </div>
   
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" name="txtNombreUsuario" value="<?php echo $regUsuario[1]; ?>">
            </div>
          <div class="form-group col-md-6">
            <label for="apellido1">Primer Apellido:</label>
            <input type="text" class="form-control" name="txtApe1" value="<?php echo $regUsuario[2]; ?>">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="apellido2">Segundo Apellido:</label>
              <input type="text" class="form-control" name="txtApe2" value="<?php echo $regUsuario[3]; ?>">
            </div>
            <div class="form-group col-md-6">
              <label for="nickname">Nickname:</label>
              <input type="text" class="form-control" name="txtNickname" value="<?php echo $regUsuario[4]; ?>">
            </div>
            <div class="form-group">
            <label for="passworde">Contraseña:</label>
            <input type="password" class="form-control" name="txtPassworde" value="<?php echo $regUsuario[5]; ?>">
          </div>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="txtEmail" value="<?php echo $regUsuario[6]; ?>">
          </div>
          <div class="form-group">
          <label for="rol">Rol:</label>
          <select name="cmbRol" id="cmbRol" class="form-control" value="<?php echo $regUsuario[7]; ?>">
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
          </div>
          
        </form>
      </div>
      
      <!-- Pie del modal -->
      <div class="modal-footer">
  <a href="user1.php" class="btn btn-secondary">Cerrar</a>
  <a href="user1.php" class="btn btn-outline-primary"><button type="submit" class="btn btn-outline-primary">Guardar Cambios</button></a>
</div>

      
    </div>
  </div>
</div>




  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#modalContenedor').modal('show');
    });
  </script>
</body>
</html>
