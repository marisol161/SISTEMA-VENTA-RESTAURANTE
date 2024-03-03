<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Editar Rol</title>
</head>
<body>
<center>
    <h1>Actualizar Rol</h1>
    <?php
        require("conexion/conexion.php");
        $id_rol = $_GET['id'];
        $consulta = "SELECT * FROM rol WHERE id_rol = '$id_rol'";
        #Ejecutamos la consulta
        $roles = mysqli_query($conectar, $consulta);
        $regRol = mysqli_fetch_array($roles);
    ?>
    <form action="actualizarrol.php" method="post">
            <input type="hidden" name="txtId" value="<?php echo $id_rol; ?>">
            <table>
                <tr>
                    <td>
                        <label>Nombre Rol</label>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="txtNombreRol" value="<?php echo $regRol[1]; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Descripcion</label>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="txtDescripcion" value="<?php echo $regRol[2]; ?>">
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