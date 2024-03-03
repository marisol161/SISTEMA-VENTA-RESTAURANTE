<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Editar Platillo</title>
</head>
<body>
<center>
    <h1>Actualizar Platillo</h1>
    <?php
        require("conexion/conexion.php");
        $id_platillo = $_GET['id'];
        $consulta = "SELECT * FROM platillo WHERE id_platillo = '$id_platillo'";
        #Ejecutamos la consulta
        $platillos = mysqli_query($conectar, $consulta);
        $regPlatillo = mysqli_fetch_array($platillos);
    ?>
    <form action="actualizarplatillo.php" method="post">
            <input type="hidden" name="txtId" value="<?php echo $id_platillo; ?>">
            <table>
                <tr>
                    <td>
                        <label>Nombre Platillo</label>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="txtNombrePlatillo" value="<?php echo $regPlatillo[1]; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Precio Platillo</label>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="txtPrecioPlatillo" value="<?php echo $regPlatillo[2]; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Descripcion</label>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="txtDescripcion" value="<?php echo $regPlatillo[3]; ?>">
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