<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <title>Postre</title>
</head>
<body>
<center><h1>Postre</h1></center>  
        <br>
<a title='Inicio'class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="inicio.php">
  <svg class="bi" aria-hidden="true"><use xlink:href="#clipboard"></use></svg><img src='img/house.png' width='40' height='40'>
</a>  
<br></br>

<div class="container" >
<form  action="registrarpostre.php" method="post">
  <div class="row">
    <div class="col col-sm-8 col-md-9 col-lg-10">
      <label > Nombre del postre:</label>
  <br><br>
      <input type="text" class="form-control" placeholder="Ejemplo: Pay de limón" name="txtNombrePostre">
    </div>
    <div class="col col-sm-4 col-md-3 col-lg-2" >
        <label>Precio del postre:</label> <br> <br>
      <input type="text" class="form-control" placeholder="$" name="txtPrecioPostre">
    </div>
    
  </div>
  <br> <br>
  <div class="row">
  <div class="col col-sm-10 col-md-8 col-lg-9">
    <label >Ingrese una descripción del postre:</label> <br> <br>
    <textarea name="txtDescripcion" class="form-control" placeholder="Ejemplo: A base de galletas"></textarea>
    </div>
</div>
<br>
<center>
  <div class="row">
    <div class="col">
    <button type="submit" class="btn btn-outline-primary">Registrar postre</button>
    </div>
  </div>
  </center>
</form>
 <table class="table table-striped" width="500" align="center" cellpadding="10px" >
           <div class="row">
           <thead class ="table-dark">
        <tr>
             <div class="col-1"></div>
               <div class="col-1"> <th>Clave postre</th></div>
               <div class="col-3"> <th>Nombre postre</th></div>
               <div class="col-1"> <th>Precio postre</th></div>
               <div class="col-3"> <th>Descripcion</th></div>
               <div class="col-1"></div>
            </tr>
           </thead>
            </div>
       
        <?php
        include("conexion/conexion.php");
        $consultaPostre = "SELECT * FROM postre WHERE estatus = 1";
        $postre = mysqli_query($conectar,$consultaPostre);
        while ($registroPostre = mysqli_fetch_assoc($postre)) {
            echo "<tr>
          <td>" .  $registroPostre["id_postre"] .  "</td>" .
          "<td>".  $registroPostre["nombre_postre"] .  "</td>" .
          "<td>" ."$ ". $registroPostre["precio_postre"] . "</td>" .    
          "<td>" . $registroPostre["descripcion_postre"] . "</td>" . 
          "<td><a title='Editar' href='frm_editarpostre.php?id=".$registroPostre["id_postre"]."'><img src='img/editar.png' width='20' height='20'></a></td>" . 
          "<td><a title='Borrar' href='borrarpostre.php?id=".$registroPostre["id_postre"]."'><img src='img/trash.png' width='20' height='20'></a></td>" . 
          "</tr><br>"; 
        }
        mysqli_close($conectar);
        ?>
        </table>
        </div>

  
        <!-- -->

        
   
</body>
</html>