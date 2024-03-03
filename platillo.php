<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <title>Platillos</title>
</head>
<body>
<center><h1>Platillos</h1></center>  
        <br>
<a title='Inicio'class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="inicio.php">
  <svg class="bi" aria-hidden="true"><use xlink:href="#clipboard"></use></svg><img src='img/house.png' width='40' height='40'>
</a>  
<br></br>

<div class="container" >
<form  action="registrarplatillo.php" method="post">
  <div class="row">
    <div class="col   col-sm-8 col-md-9 col-lg-10">
      <label > Nombre del platillo</label>
  <br><br>
      <input type="text" class="form-control" placeholder="Ejemplo: BROCHETAS" name="txtNombrePlatillo">
    </div>
    <div class="col  col-sm-4 col-md-3 col-lg-2" >
        <label>Precio del platillo:</label> <br> <br>
      <input type="text" class="form-control" placeholder="$" name="txtPrecioPlatillo">
    </div>
    
  </div>
  <br> <br>
  <div class="row">
  <div class="col col-sm-8 col-md-8 col-lg-9">
    <label >Ingrese una descripción del platillo:</label> <br> <br>
    <textarea name="txtDescripcion" class="form-control" placeholder="Ejemplo: Pierna con muslo"></textarea>
    </div>
</div>
<br>
<center>
  <div class="row">
    <div class="col">
    <button type="submit" class="btn btn-outline-primary">Registrar Platillo</button>
    </div>
  </div>
  </center>
</form>
 <table class="table table-striped" width="500" align="center" cellpadding="10px" >
           <div class="row">
            <thead class ="table-dark">
        <tr>
             <div class="col-1"></div>
               <div > <th>Clave Platillo</th></div>
               <div > <th>Nombre Platillo</th></div>
               <div > <th>Precio Platillo</th></div>
               <div > <th>Descripcion</th></div>
               <div ></div>
            </tr>
            </thead>
            </div>
       
        <?php
        include("conexion/conexion.php");
        $consultaPlatillo = "SELECT * FROM platillo WHERE estatus = 1 ";
        $platillo = mysqli_query($conectar,$consultaPlatillo);
        while ($registroPlatillo = mysqli_fetch_assoc($platillo)) {
            echo "<tr>
          <td>" .  $registroPlatillo["id_platillo"] .  "</td>" .
          "<td>".  $registroPlatillo["nombre_platillo"] .  "</td>" .
          "<td>" ."$ ". $registroPlatillo["precio_platillo"] . "</td>" .    
          "<td>" . $registroPlatillo["descripcion_platillo"] . "</td>" . 
          "<td><a title='Editar' href='frm_editarplatillo.php?id=".$registroPlatillo["id_platillo"]."'><img src='img/editar.png' width='20' height='20'></a></td>" . 
          "<td><a title='Borrar' href='borrarplatillo.php?id=".$registroPlatillo["id_platillo"]."'><img src='img/trash.png' width='20' height='20'></a></td>" . 
          "</tr><br>"; 
        }
        mysqli_close($conectar);
        ?>
        </table>
        </div>

  
        <!-- -->

        
   
</body>
</html>