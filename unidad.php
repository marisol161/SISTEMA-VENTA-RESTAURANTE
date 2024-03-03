<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Unidad</title>
</head>
<body>
   
      <center> <h1>Unidad</h1><br></center> 
        <a title='Inicio'class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="inicio.php">
  <svg class="bi" aria-hidden="true"><use xlink:href="#clipboard"></use></svg><img src='img/house.png' width='40' height='40'>
</a>
<br></br>
        <div class="container">
        
        <form action="registrarunidad.php" method="post">
        <div class="row">
            
    <div class="col-10"> <br>
    <label>Nombre de unidad:</label>
   <input type="text" class="form-control"  placeholder="Ejemplo: Unidad" name="txtNombreUnidad">
    </div>
</div>

           <br>
            <div class='row'>
            <center>
                <div class = 'col col-sm-8 col-md-6 col-lg-4'>
           <button type="submit" class="btn btn-outline-primary">Registrar unidad</button>
           </div> 
           </center>  
        </div>   
</form>
</center> 
       <div class="row">
       <center>
        <div class="col-8 col-sm-11 col-md-11 col-lg-10">
        <table class="table table-striped" border="2" >
            <tr>
                <th>Clave Unidad</th>
                <th>Nombre Unidad</th>
            </tr>
        </div>
        <?php
        include("conexion/conexion.php");
        $consultaUnidad = "SELECT * FROM unidad WHERE estatus = 1";
        $unidad = mysqli_query($conectar,$consultaUnidad);
        while ($registroUnidad = mysqli_fetch_assoc($unidad)) {
            echo "<tr>
          <td>" .  $registroUnidad["id_unidad"] .  "</td>" .
          "<td>".  $registroUnidad["nombre_unidad"] .  "</td>" .
          "<td><a title='Editar' href='frm_editarunidad.php?id=".$registroUnidad["id_unidad"]."'><img src='img/editar.png' width='20' height='20'></a></td>" . 
          "<td><a title='Borrar' href='borrarunidad.php?id=".$registroUnidad["id_unidad"]."'><img src='img/trash.png' width='20' height='20'></a></td>" . 
          "</tr><br>"; 
        }
        mysqli_close($conectar);
        ?>
        </table>
        </div>
        </center>
        </div>
   
       
   
</body>
</html>