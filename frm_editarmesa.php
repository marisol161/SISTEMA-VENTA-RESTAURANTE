<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Editar Mesa</title>
</head>
<body>
<center>
    <h1>Actualizar Mesa</h1>
    <?php
        require("conexion/conexion.php");
        $id_mesa = $_GET['id'];
        $consulta = "SELECT * FROM mesa WHERE id_mesa = '$id_mesa'";
        #Ejecutamos la consulta
        $mesas = mysqli_query($conectar, $consulta);
        $regMesa = mysqli_fetch_array($mesas);
    ?>
    <form action="actualizarmesa.php" method="post">
            <input type="hidden" name="txtId" value="<?php echo $id_mesa; ?>">
            <table>
                <tr>
                    <td>
                        <label>Tipo Mesa</label>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="txtTipoMesa" value="<?php echo $regMesa[1]; ?>">
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