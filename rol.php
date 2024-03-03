<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Roles</title>
</head>
<body>
    <center>
        <h1>Rol</h1> </center> 
        <a title='Inicio'class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="inicio.php">
  <svg class="bi" aria-hidden="true"><use xlink:href="#clipboard"></use></svg><img src='img/house.png' width='40' height='40'>
</a>  
<br></br>
<div class ="container">
    <form action="registrarrol.php" method="post">
   
<div class="row">
    <div class="col-9">
    <label>Rol:</label>
    <input type="text" class="form-control"  placeholder="Ejemplo: Administrador" name="txtNombreRol">
    </div>
</div>
<div class="row">
    <div class="col-9"> <br>
    <label>Descripcion:</label>
   <input type="text" class="form-control" placeholder="Ejemplo: Realiza todas las funciones"name="txtDescripcion">
    </div>
</div>

           <br>
          
            <div class='row'>
            <center>
                <div class = 'col col-sm-8 col-md-6 col-lg-4'>
           <button type="submit" class="btn btn-outline-primary">Registrar Rol</button>
           </div> 
           </center>  
        </div>   
        
        </form>
        
        </div>
       <div class="row">
        <center>
        <div class="col col-sm-11 col-md-11 col-lg-10">
        <table class="table table-striped" border="2" >
            <tr>
                <th>Clave Rol</th>
                <th>Nombre Rol</th>
                <th>Descripcion</th>
            </tr>
            </div>
            </center>
        <?php
        include("conexion/conexion.php");
        $consultaRol = "SELECT * FROM rol WHERE estatus = 1";
        $rol = mysqli_query($conectar,$consultaRol);
        while ($registroRol = mysqli_fetch_assoc($rol)) {
            echo "<tr>
          <td>" .  $registroRol["id_rol"] .  "</td>" .
          "<td>".  $registroRol["rol"] .  "</td>" .
          "<td>".  $registroRol["descripcion"] .  "</td>" .
          "<td><a title='Editar' href='frm_editarrol.php?id=".$registroRol["id_rol"]."'><img src='img/editar.png' width='20' height='20'></a></td>" . 
          "<td><a title='Borrar' href='borrarrol.php?id=".$registroRol["id_rol"]."'><img src='img/trash.png' width='20' height='20'></a></td>" . 
          "</tr><br>"; 
        }
        mysqli_close($conectar);
        ?>
        </table>
    </div>
</body>
</html>