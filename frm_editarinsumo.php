<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Editar Insumo</title>
</head>
<body>
<center>
    <h1>Actualizar Insumo</h1>
    <?php
        require("conexion/conexion.php");
        $id_insumos = $_GET['id'];
        $consulta = "SELECT * FROM insumos WHERE id_insumos = '$id_insumos'";
        #Ejecutamos la consulta
        $insumos = mysqli_query($conectar, $consulta);
        $regInsumos = mysqli_fetch_array($insumos);
    ?>
    <form action="actualizarinsumo.php" method="post">
            <input type="hidden" name="txtId" value="<?php echo $id_insumos; ?>">
            <table>
                <tr>
                    <td><label>Nombre Insumo</label></td>
                    <td><input type="text" class="form-control" name="txtNombreInsumo" value="<?php echo $regInsumos[1]; ?>"></td>
                </tr>
                <tr>
                    <td><label>Cantidad Insumo</label></td>
                    <td><input type="text" class="form-control" name="txtCantidadInsumo" value="<?php echo $regInsumos[2]; ?>"></td>
                </tr>
                <tr>
                    <td><label>Unidad:</label></td>
                    <td>
                        <select name="cmbUnidad" id="" class="form-control">
                            <option value="">Seleccione una opcion</option>
                            <?php
                                include("Conexion/conexion.php");
                                $consulta = "SELECT unidad.id_unidad, unidad.nombre_unidad FROM unidad WHERE estatus = 1";
                                $unidad = mysqli_query($conectar, $consulta);
                                while($regUnidad = mysqli_fetch_array($unidad)){
                                    echo "<option value='" . $regUnidad[0] . "'>" . $regUnidad[1] . "</option> "; 
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