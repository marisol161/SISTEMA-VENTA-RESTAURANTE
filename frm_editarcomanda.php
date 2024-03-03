<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Editar Comanda</title>
</head>
<body>
<center>
    <h1>Actualizar Comanda</h1>
    <?php
        require("conexion/conexion.php");
        $id_comanda = $_GET['id'];
        $consulta = "SELECT * FROM comanda WHERE id_comanda = '$id_comanda'";
        #Ejecutamos la consulta
        $comanda = mysqli_query($conectar, $consulta);
        $regComanda = mysqli_fetch_array($comanda);
    ?>
    <form action="actualizarcomanda.php" method="post">
            <input type="hidden" name="txtId" value="<?php echo $id_comanda; ?>">
            <table>
                <tr>
                    <td><label>Total Comanda</label></td>
                    <td><input type="decimal" name="txtTotalComanda" value="<?php echo $regComanda[1]; ?>"></td>
                </tr>
                <tr>
                    <td><label>Fecha Comanda</label></td>
                    <td><input type="date" name="txtFechaComanda" value="<?php echo $regComanda[2]; ?>"></td>
                </tr>
                <tr>
                    <td>
                        <button type="reset">Cancelar</button>
                    </td>
                    <td>
                        <button type="submit">Guardar cambios</button>
                    </td>
                </tr>
            </table>
        </form>
</body>
</html>