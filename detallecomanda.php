<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Detalle Comandas</title>
</head>
<body>
    <center>
        <h1>Detalle Comandas</h1>
        <form action="registrardetallecomanda.php" method="post">
            <table>
                <tr>
                    <td><label>Usuario:</label></td>
                    <td>
                        <select name="cmbUsuario" id="">
                            <option value="">--Seleccione</option>
                            <?php
                                include("Conexion/conexion.php");
                                $consulta = "SELECT usuario.id_usuario, usuario.nombre FROM usuario WHERE estatus = 1";
                                $usuario = mysqli_query($conectar, $consulta);
                                while($regUsuario = mysqli_fetch_array($usuario)){
                                    echo "<option value='" . $regUsuario[0] . "'>" . $regUsuario[1] . "</option> "; 
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Mesa:</label></td>
                    <td>
                        <select name="cmbMesa" id="">
                            <option value="">--Seleccione</option>
                            <?php
                                include("Conexion/conexion.php");
                                $consulta = "SELECT mesa.id_mesa, mesa.tipo_mesa FROM mesa WHERE estatus = 1";
                                $mesa = mysqli_query($conectar, $consulta);
                                while($regMesa = mysqli_fetch_array($mesa)){
                                    echo "<option value='" . $regMesa[0] . "'>" . $regMesa[1] . "</option> "; 
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Comanda:</label></td>
                    <td>
                        <select name="cmbComanda" id="">
                            <option value="">--Seleccione</option>
                            <?php
                                include("Conexion/conexion.php");
                                $consulta = "SELECT comanda.id_comanda, comanda.fecha_comanda FROM comanda WHERE estatus = 1";
                                $comanda = mysqli_query($conectar, $consulta);
                                while($regComanda = mysqli_fetch_array($comanda)){
                                    echo "<option value='" . $regComanda[0] . "'>" . $regComanda[1] . "</option> "; 
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Platillo:</label></td>
                    <td>
                        <select name="cmbPlatillo" id="">
                            <option value="">--Seleccione</option>
                            <?php
                                include("Conexion/conexion.php");
                                $consulta = "SELECT platillo.id_platillo, platillo.nombre_platillo FROM platillo WHERE estatus = 1";
                                $platillo = mysqli_query($conectar, $consulta);
                                while($regPlatillo = mysqli_fetch_array($platillo)){
                                    echo "<option value='" . $regPlatillo[0] . "'>" . $regPlatillo[1] . "</option> "; 
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Cantidad Platillo:</label></td>
                    <td><input type="text" name="txtCantidadPlatillo"></td>
                </tr>
                <tr>
                    <td><label>Bebida:</label></td>
                    <td>
                        <select name="cmbBebida" id="">
                            <option value="">--Seleccione</option>
                            <?php
                                include("Conexion/conexion.php");
                                $consulta = "SELECT bebida.id_bebida, bebida.nombre_bebida FROM bebida WHERE estatus = 1";
                                $bebida = mysqli_query($conectar, $consulta);
                                while($regBebida = mysqli_fetch_array($bebida)){
                                    echo "<option value='" . $regBebida[0] . "'>" . $regBebida[1] . "</option> "; 
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Cantidad Bebida:</label></td>
                    <td><input type="text" name="txtCantidadBebida"></td>
                </tr>
                <tr>
                    <td><label>Postre:</label></td>
                    <td>
                        <select name="cmbPostre" id="">
                            <option value="">--Seleccione</option>
                            <?php
                                include("Conexion/conexion.php");
                                $consulta = "SELECT postre.id_postre, postre.nombre_postre FROM postre WHERE estatus = 1";
                                $postre = mysqli_query($conectar, $consulta);
                                while($regPostre = mysqli_fetch_array($postre)){
                                    echo "<option value='" . $regPostre[0] . "'>" . $regPostre[1] . "</option> "; 
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label>Cantidad Postre:</label></td>
                    <td><input type="text" name="txtCantidadPostre"></td>
                </tr>
                <tr>
                    <td><label>Especificaciones:</label></td>
                    <td><input type="text" name="txtEspecificaciones"></td>
                </tr>
           </table>
           <br><br>
           <button type="submit">Registrar Detalle Comanda</button>
</form>
       <div class="table-responsive">
        <table class="table table-striped" border="2" >
            <tr>
                <th>Clave Detalle Comanda</th>
                <th>Usuario</th>
                <th>Tipo Mesa</th>
                <th>Comanda</th>
                <th>Platillo</th>
                <th>Cantidad Platillo</th>
                <th>Bebida</th>
                <th>Cantidad Bebida</th>
                <th>Postre</th>
                <th>Cantidad Postre</th>
                <th>Especificaciones</th>
            </tr>
        </div>
        <?php
        include("conexion/conexion.php");
        $consultaUsuario = "SELECT
        detallecomanda.id_detallecomanda, 
        usuario.nombre, 
        mesa.tipo_mesa, 
        comanda.fecha_comanda, 
        platillo.nombre_platillo, 
        detallecomanda.cantidad_platillo, 
        bebida.nombre_bebida, 
        detallecomanda.cantidad_bebida, 
        postre.nombre_postre, 
        detallecomanda.cantidad_postre, 
        detallecomanda.especificaciones
        FROM detallecomanda
        INNER JOIN usuario ON detallecomanda.id_usuario = usuario.id_usuario
        INNER JOIN mesa ON detallecomanda.id_mesa = mesa.id_mesa
        INNER JOIN comanda ON detallecomanda.id_comanda = comanda.id_comanda
        INNER JOIN platillo ON detallecomanda.id_platillo = platillo.id_platillo
        INNER JOIN bebida ON detallecomanda.id_bebida = bebida.id_bebida
        INNER JOIN postre ON detallecomanda.id_postre = postre.id_postre
        WHERE detallecomanda.estatus = 1";
        $detallecomanda = mysqli_query($conectar,$consultaUsuario);
        while ($registroDetalleComanda = mysqli_fetch_assoc($detallecomanda)) {
            echo "<tr>
          <td>" .  $registroDetalleComanda["id_detallecomanda"] .  "</td>" .
          "<td>".  $registroDetalleComanda["nombre"] .  "</td>" .
          "<td>".  $registroDetalleComanda["tipo_mesa"] . "</td>" .
          "<td>".  $registroDetalleComanda["fecha_comanda"] . "</td>" .  
          "<td>".  $registroDetalleComanda["nombre_platillo"] . "</td>" .  
          "<td>".  $registroDetalleComanda["cantidad_platillo"] . "</td>" .
          "<td>".  $registroDetalleComanda["nombre_bebida"] . "</td>" .
          "<td>".  $registroDetalleComanda["cantidad_bebida"] . "</td>" .
          
          "<td>" . $registroDetalleComanda["rol"] . "</td>" . 
          "<td><a title='Editar' href='frm_editardetallecomanda.php?id=".$registroDetalleComanda["id_usuario"]."'><img src='img/editar.png' width='20' height='20'></a></td>" . 
          "<td><a title='Borrar' href='borrardetallecomanda.php?id=".$registroDetalleComanda["id_usuario"]."'><img src='img/trash.png' width='20' height='20'></a></td>" . 
          "</tr><br>"; 
        }
        mysqli_close($conectar);
        ?>
        </table>
    </center> 
</body>
</html>