<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Editar Postre</title>
</head>
<body>
<center>
    <h1>Actualizar Postre</h1>
    <?php
        require("conexion/conexion.php");
        $id_postre = $_GET['id'];
        $consulta = "SELECT * FROM postre WHERE id_postre = '$id_postre'";
        #Ejecutamos la consulta
        $postres = mysqli_query($conectar, $consulta);
        $regPostre = mysqli_fetch_array($postres);
    ?>
    <form action="actualizarpostre.php" method="post">
            <input type="hidden" name="txtId" value="<?php echo $id_postre; ?>">
            <table>
                <tr>
                    <td>
                        <label>Nombre Postre</label>
                    </td>
                    <td>

                        <input type="text" class="form-control" name="txtNombrePostre" value="<?php echo $regPostre[1]; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Precio Postre</label>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="txtPrecioPostre" value="<?php echo $regPostre[2]; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Descripcion</label>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="txtDescripcion" value="<?php echo $regPostre[3]; ?>">
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