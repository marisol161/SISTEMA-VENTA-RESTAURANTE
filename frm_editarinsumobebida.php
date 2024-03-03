<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Editar Insumo Bebida</title>
</head>
<body>
<center>
    <h1>Actualizar Insumo Bebida</h1>
    <?php
        require("conexion/conexion.php");
        $id_insumoBebida = $_GET['id'];
        $consulta = "SELECT * FROM insumobebida WHERE id_insumoBebida = '$id_insumoBebida'";
        #Ejecutamos la consulta
        $insumoBebida = mysqli_query($conectar, $consulta);
        $regInsumoBebida = mysqli_fetch_array($insumoBebida);
    ?>
    <form action="actualizarinsumobebida.php" method="post">
            <input type="hidden" name="txtId" value="<?php echo $id_insumoBebida; ?>">
            <table>
                <tr>
                    <td><label>Bebida:</label></td>
                    <td>
                        <select name="cmbBebida" id="" value="<?php echo $regInsumoBebida[1]; ?>">
                            <option value="">--Seleccione</option>
                            <?php
                                include("Conexion/conexion.php");
                                $consulta = "SELECT bebida.id_bebida,bebida.nombre_bebida FROM bebida";
                                $bebida = mysqli_query($conectar, $consulta);
                                while($regBebida = mysqli_fetch_array($bebida)){
                                    echo "<option value='" . $regBebida[0] . "'>" . $regBebida[1] . "</option> "; 
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Insumo:</label></td>
                    <td>
                        <select name="cmbInsumo" id="" value="<?php echo $regInsumoBebida[2]; ?>">
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
                        <input type="text" name="txtCantidad" value="<?php echo $regInsumoBebida[3]; ?>">
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