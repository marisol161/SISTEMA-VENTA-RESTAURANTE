<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <title>Insumos Platillos</title>
</head>
<body>
<center><h1>Insumos Platillos</h1></center>  
        <br>
<a title='Inicio'class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="inicio.php">
  <svg class="bi" aria-hidden="true"><use xlink:href="#clipboard"></use></svg><img src='img/house.png' width='40' height='40'>
</a>  
<br></br>

<div class="container" >
<form  action="registrarinsumo.php" method="post">
    <div class="row">
        <div class="col">
            <td><label>Platillo:</label></td>
                    <td>
                        <select name="cmbPlatillo" id="" class="form-control">
                            <option value="">Seleccione una opcion</option>
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
        </div>
    </div>
    <br><br>
    <div class="row">
        <div class="col col-sm-8 col-md-9 col-lg-10">
            <td><label>Insumo:</label></td>
                    <td>
                        <select name="cmbInsumo" id="" class="form-control">
                            <option value="">Seleccione una opcion</option>
                            <?php
                                include("Conexion/conexion.php");
                                $consulta = "SELECT insumos.id_insumos, insumos.nombre_insumo FROM insumos WHERE estatus = 1";
                                $insumo = mysqli_query($conectar, $consulta);
                                while($regInsumo = mysqli_fetch_array($insumo)){
                                    echo "<option value='" . $regInsumo[0] . "'>" . $regInsumo[1] . "</option> "; 
                                }
                            ?>
                        </select>
                    </td>
        </div>
    </div>
    <div class="row">
    <div class="col col-sm-4 col-md-9 col-lg-10" >
        <label>Cantidad:</label> <br> <br>
      <input type="text" class="form-control" placeholder="1, 2, 3, 4, 5" name="txtCantidad">
    </div>                          
    </div>
<center>
  <div class="row">
    <div class="col">
    <button type="submit" class="btn btn-outline-primary">Registrar Insumo</button>
    </div>
  </div>
  </center>
</form>
 <table class="table table-striped" width="500" align="center" cellpadding="10px" >
           <div class="row">
        <tr>
             <div class="col-1"></div>
               <div class="col-1"> <th>Clave Insumos</th></div>
               <div class="col-3"> <th>Nombre del Insumo</th></div>
               <div class="col-1"> <th>Nombre de la Unidad</th></div>
               <div class="col-3"> <th>Cantidad Insumo</th></div>
               <div class="col-1"></div>
            </tr>
            </div>
       
        <?php
        include("conexion/conexion.php");
        $consultaInsumo = "SELECT insumos.id_insumos, insumos.nombre_insumo, 
        unidad.nombre_unidad, insumos.cantidad_insumo
        FROM insumos 
        INNER JOIN unidad ON insumos.id_unidad = unidad.id_unidad
        WHERE insumos.estatus = 1";
        $insumo = mysqli_query($conectar,$consultaInsumo);
        while ($registroInsumo = mysqli_fetch_assoc($insumo)) {
            echo "<tr>
          <td>" .  $registroInsumo["id_insumos"] .  "</td>" .
          "<td>" .  $registroInsumo["nombre_insumo"] .  "</td>" .
          "<td>" . $registroInsumo["nombre_unidad"] . "</td>" .    
          "<td>" . $registroInsumo["cantidad_insumo"] . "</td>" . 
          "<td><a title='Editar' href='frm_editarinsumo.php?id=".$registroInsumo["id_insumos"]."'><img src='img/editar.png' width='20' height='20'></a></td>" . 
          "<td><a title='Borrar' href='borrarinsumo.php?id=".$registroInsumo["id_insumos"]."'><img src='img/trash.png' width='20' height='20'></a></td>" . 
          "</tr><br>"; 
        }
        mysqli_close($conectar);
        ?>
        </table>
        </div>

  
        <!-- -->

        
   
</body>
</html>