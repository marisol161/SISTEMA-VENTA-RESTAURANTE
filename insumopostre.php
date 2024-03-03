<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Insumo Postre</title>
</head>
<body>
    <center>
        <h1>Insumo Postre</h1>
        <form action="registrarinsumopostre.php" method="post">
            <table>
                <tr>
                    <td><label>Postre:</label></td>
                    <td>
                        <select name="cmbPostre" id="">
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
                        <select name="cmbInsumo" id="">
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
                    <td><label>Cantidad:</label></td>
                    <td><input type="text" name="txtCantidad"></td>
                </tr>
           </table>
           <br><br>
           <button type="submit">Registrar Insumo Postre</button>
</form>
       <div class="table-responsive">
        <table class="table table-striped" border="2" >
            <tr>
                <th>Clave Insumo Postre</th>
                <th>Nombre Postre</th>
                <th>Nombre Insumo</th>
                <th>Cantidad</th>
            </tr>
        </div>
        <?php
        include("conexion/conexion.php");
        $consultaInsumoPostre = "SELECT insumopostre.id_insumopostre, postre.nombre_postre, 
        insumos.nombre_insumo, insumos.cantidad_insumo
        FROM postre
        INNER JOIN insumopostre ON postre.id_postre = insumopostre.id_post
        INNER JOIN insumos ON insumopostre.id_in = insumos.id_insumos
        WHERE insumopostre.estatus = 1";
        $insumopostre = mysqli_query($conectar,$consultaInsumoPostre);
        while ($registroInsumoPostre = mysqli_fetch_assoc($insumopostre)) {
            echo "<tr>
          <td>" .  $registroInsumoPostre["id_insumopostre"] .  "</td>" .
          "<td>".  $registroInsumoPostre["nombre_postre"] .  "</td>" .
          "<td>".  $registroInsumoPostre["nombre_insumo"] .  "</td>" .
          "<td>".  $registroInsumoPostre["cantidad_insumo"] .  "</td>" .
          "<td><a title='Editar' href='frm_editarinsumopostre.php?id=".$registroInsumoPostre["id_insumopostre"]."'><img src='img/editar.png' width='20' height='20'></a></td>" . 
          "<td><a title='Borrar' href='borrarinsumopostre.php?id=".$registroInsumoPostre["id_insumopostre"]."'><img src='img/trash.png' width='20' height='20'></a></td>" . 
          "</tr><br>"; 
        }
        mysqli_close($conectar);
        ?>
        </table>
    </center> 
</body>
</html>