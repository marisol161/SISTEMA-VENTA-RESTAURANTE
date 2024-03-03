<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Editar Usuario</title>
</head>
<body>
<center>
    <h1>Actualizar Usuario</h1>
    <?php
        require("conexion/conexion.php");
        $id_usuario = $_GET['id'];
        $consulta = "SELECT * FROM usuario WHERE id_usuario = '$id_usuario'";
        #Ejecutamos la consulta
        $usuarios = mysqli_query($conectar, $consulta);
        $regUsuario = mysqli_fetch_array($usuarios);
    ?>

    <form action="actualizarusuario.php" method="post">
            <input type="hidden" name="txtId" value="<?php echo $id_usuario; ?>">
            <table>
            <tr>
                <td>
                    <label>Nombre Usuario:</label>
                </td>
                    <td><input type="text" class="form-control" name="txtNombreUsuario" value="<?php echo $regUsuario[1]; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Apellido Paterno:</label>
                </td>
                    <td><input type="text" class="form-control" name="txtApe1" value="<?php echo $regUsuario[2]; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Apellido Materno:</label>
                </td>
                    <td><input type="text" class="form-control" name="txtApe2" value="<?php echo $regUsuario[3]; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Nickname:</label>
                </td>
                    <td><input type="text" class="form-control" name="txtNickname" value="<?php echo $regUsuario[4]; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Password:</label>
                </td>
                <td>
                    <input type="password" class="form-control" name="txtPassword" value="<?php echo $regUsuario[5]; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Email:</label>
                </td>
                <td>
                    <input type="email" class="form-control" name="txtEmail" value="<?php echo $regUsuario[6]; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Rol:</label></td>
                <td>
                    <select name="cmbRol" id="" class="form-control" value="<?php echo $regUsuario[7]; ?>">
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
            </tr>
                <tr>
                    <td>
                        <button type="submit" class="btn btn-outline-primary" href="inicio.php">Cancelar</button>
                    </td>
                    <td>
                        <button type="submit" class="btn btn-outline-primary">Guardar Cambios</button>
                    </td>
                </tr>
            </table>
        </form>
</body>
</html>