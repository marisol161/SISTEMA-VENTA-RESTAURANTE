<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Insumo Bebida</title>
</head>
<body>
    <center>
        <h1>Insumo Bebida</h1>
        <form action="registrarinsumobebida.php" method="post">
            <table>
                <tr>
                    <td><label>Bebida:</label></td>
                    <td>
                        <select name="cmbBebida" id="">
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
           <button type="submit">Registrar Insumo Bebida</button>
</form>
       <div class="table-responsive">
        <table class="table table-striped" border="2" >
            <tr>
                <th>Clave Insumo Bebida</th>
                <th>Nombre Bebida</th>
                <th>Nombre Insumo</th>
                <th>Cantidad</th>
            </tr>
        </div>
        <?php
        include("conexion/conexion.php");
        $consultaInsumoBebida = "SELECT insumobebida.id_insumoBebida, bebida.nombre_bebida, 
        insumos.nombre_insumo, insumos.cantidad_insumo
        FROM bebida
        INNER JOIN insumobebida ON bebida.id_bebida = insumobebida.id_bebida
        INNER JOIN insumos ON insumobebida.id_insumos = insumos.id_insumos
        WHERE insumobebida.estatus = 1";
        $insumobebida = mysqli_query($conectar,$consultaInsumoBebida);
        while ($registroInsumoBebida = mysqli_fetch_assoc($insumobebida)) {
            echo "<tr>
          <td>" .  $registroInsumoBebida["id_insumoBebida"] .  "</td>" .
          "<td>".  $registroInsumoBebida["nombre_bebida"] .  "</td>" .
          "<td>".  $registroInsumoBebida["nombre_insumo"] .  "</td>" .
          "<td>".  $registroInsumoBebida["cantidad_insumo"] .  "</td>" .
          "<td><a title='Editar' href='frm_editarinsumobebida.php?id=".$registroInsumoBebida["id_insumoBebida"]."'><img src='img/editar.png' width='20' height='20'></a></td>" . 
          "<td><a title='Borrar' href='borrarinsumobebida.php?id=".$registroInsumoBebida["id_insumoBebida"]."'><img src='img/trash.png' width='20' height='20'></a></td>" . 
          "</tr><br>"; 
        }
        mysqli_close($conectar);
        ?>
        </table>
    </center> 
</body>
</html>