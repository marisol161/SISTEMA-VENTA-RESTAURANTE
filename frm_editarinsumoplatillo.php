<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Editar Insumo Platillo</title>
</head>
<body>
<center>
    <h1>Actualizar Insumo Platillo</h1>
    <?php
        require("conexion/conexion.php");
        $id_insumoPlatillo = $_GET['id'];
        $consulta = "SELECT * FROM insumoplatillo WHERE id_insumoPlatillo = '$id_insumoPlatillo'";
        #Ejecutamos la consulta
        $insumoPlatillo = mysqli_query($conectar, $consulta);
        $regInsumoPlatlllo = mysqli_fetch_array($insumoPlatillo);
    ?>
    <form action="actualizarinsumoplatillo.php" method="post">
            <input type="hidden" name="txtId" value="<?php echo $id_insumoPlatillo; ?>">
            <table>
                <tr>
                    <td><label>Platillo:</label></td>
                    <td>
                        <select name="cmbPlatillo" id="" value="<?php echo $regInsumoPlatlllo[1]; ?>">
                            <option value="">--Seleccione</option>
                            <?php
                                include("Conexion/conexion.php");
                                $consulta = "SELECT platillo.id_platillo, platillo.nombre_platillo FROM platillo";
                                $platillo = mysqli_query($conectar, $consulta);
                                while($regPlatillo = mysqli_fetch_array($platillo)){
                                    echo "<option value='" . $regPlatillo[0] . "'>" . $regPlatillo[1] . "</option> "; 
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Insumo:</label></td>
                    <td>
                        <select name="cmbInsumo" id="" value="<?php echo $regInsumoPlatlllo[2]; ?>">
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
                        <input type="text" name="txtCantidad" value="<?php echo $regInsumoPlatlllo[3]; ?>">
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