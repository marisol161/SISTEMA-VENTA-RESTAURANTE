<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Comandas</title>
</head>
<body>
    <center>
        <h1>Comandas</h1>
        <form action="registrarcomanda.php" method="post">
            <table>
                <tr>
                    <td><label>Total Comanda:</label></td>
                    <td><input type="decimal" name="txtTotalComanda"></td>
                </tr>
                <tr>
                    <td><label>Fecha comanda:</label></td>
                    <td><input type="date" name="txtFechaComanda"></td>
                </tr>
           </table>
           <br><br>
           <button type="submit">Registrar Comanda</button>
</form>
       <div class="table-responsive">
        <table class="table table-striped" border="2" >
            <tr>
                <th>Clave Comanda</th>
                <th>Total Comanda</th>
                <th>Fecha Comanda</th>
            </tr>
        </div>
        <?php
        include("conexion/conexion.php");
        $consultaComanda = "SELECT * FROM comanda WHERE estatus = 1";
        $comanda = mysqli_query($conectar,$consultaComanda);
        while ($registroComanda = mysqli_fetch_assoc($comanda)) {
            echo "<tr>
          <td>" .  $registroComanda["id_comanda"] .  "</td>" .
          "<td>" ."$ ". $registroComanda["total_comanda"] . "</td>" .    
          "<td>" . $registroComanda["fecha_comanda"] . "</td>" . 
          "<td><a title='Editar' href='frm_editarcomanda.php?id=".$registroComanda["id_comanda"]."'><img src='img/editar.png' width='20' height='20'></a></td>" . 
          "<td><a title='Borrar' href='borrarcomanda.php?id=".$registroComanda["id_comanda"]."'><img src='img/trash.png' width='20' height='20'></a></td>" . 
          "</tr><br>"; 
        }
        mysqli_close($conectar);
        ?>
        </table>
    </center> 
</body>
</html>