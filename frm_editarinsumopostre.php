<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Editar Insumo Postre</title>
</head>
<body>
<center>
    <h1>Actualizar Insumo Postre</h1>
    <?php
        require("conexion/conexion.php");
        $id_insumopostre = $_GET['id'];
        $consulta = "SELECT * FROM insumopostre WHERE id_insumopostre = '$id_insumopostre'";
        #Ejecutamos la consulta
        $insumoPostre = mysqli_query($conectar, $consulta);
        $regInsumoPostre = mysqli_fetch_array($insumoPostre);
    ?>
    <form action="actualizarinsumopostre.php" method="post">
            <input type="hidden" name="txtId" value="<?php echo $id_insumopostre; ?>">
            <table>
                <tr>
                    <td><label>Postre:</label></td>
                    <td>
                        <select name="cmbPostre" id="" value="<?php echo $regInsumoPostre[1]; ?>">
                            <option value="">--Seleccione</option>
                            <?php
                                include("Conexion/conexion.php");
                                $consulta = "SELECT postre.id_postre, postre.nombre_postre FROM postre";
                                $postre = mysqli_query($conectar, $consulta);
                                while($regPostre = mysqli_fetch_array($postre)){
                                    echo "<option value='" . $regPostre[0] . "'>" . $regPostre[1] . "</option> "; 
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Insumo:</label></td>
                    <td>
                        <select name="cmbInsumo" id="" value="<?php echo $regInsumoPostre[2]; ?>">
                            <option value="">--Seleccione</option>
                            <?php
                                include("Conexion/conexion.php");
                                $consulta = "SELECT insumos.id_insumos, insumos.nombre_insumo FROM insumos";
                                $insumo = mysqli_query($conectar, $consulta);
                                while($regInsumo = mysqli_fetch_array($insumo)){
                                    echo "<option value='" . $regInsumo[0] . "'>" . $regInsumo[1] . "</option> "; 
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Cantidad:</label>
                    </td>
                    <td>
                        <input type="text" name="txtCantidad" value="<?php echo $regInsumoPostre[3]; ?>">
                    </td>
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