<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Mesa</title>
</head>
<body>
    <center>
        <h1>Mesa</h1></center> 
        <a title='Inicio'class="icon-link icon-link-hover" style="--bs-icon-link-transform: translate3d(0, -.125rem, 0);" href="inicio.php">
  <svg class="bi" aria-hidden="true"><use xlink:href="#clipboard"></use></svg><img src='img/house.png' width='40' height='40'>
</a>  
<br>
<div class="container">

        <form action="registrarmesa.php" method="post">

        <div class="col-9"> <br>
    <label>Tipo mesa:</label>
   <input type="text" class="form-control" name="txtTipoMesa" placeholder="Ejemplo:Sencilla">
    </div>
</div>
           <br>
          
            <div class='row'>
            <center>
                <div class = 'col col-sm-8 col-md-6 col-lg-4'>
           <button type="submit" class="btn btn-outline-primary">Registrar Mesa</button>
           </div> 
           </center>  
        </div>   
          
        </form>

       <div class="row">
        <center>
        <div class="col col-sm-11 col-md-11 col-lg-10">
        <table class="table table-striped" border="2" >
            <tr>
                <th>Clave Mesa</th>
                <th>Tipo Mesa</th>
            </tr>
            </div>
            </center>
        </div>
        <?php
        include("conexion/conexion.php");
        $consultaMesa = "SELECT * FROM mesa WHERE estatus = 1";
        $mesa = mysqli_query($conectar,$consultaMesa);
        while ($registroMesa = mysqli_fetch_assoc($mesa)) {
            echo "<tr>
          <td>" .  $registroMesa["id_mesa"] .  "</td>" .
          "<td>".  $registroMesa["tipo_mesa"] .  "</td>" .
          "<td><a title='Editar' href='frm_editarmesa.php?id=".$registroMesa["id_mesa"]."'><img src='img/editar.png' width='20' height='20'></a></td>" . 
          "<td><a title='Borrar' href='borrarmesa.php?id=".$registroMesa["id_mesa"]."'><img src='img/trash.png' width='20' height='20'></a></td>" . 
          "</tr><br>"; 
        }
        mysqli_close($conectar);
        ?>
        </table>


        </div>
    
</body>
</html>