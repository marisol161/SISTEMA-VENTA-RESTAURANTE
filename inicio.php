<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['txtNombre'])) {
    // Si no ha iniciado sesión, redireccionar a login.php
    header("Location: login.php");
    exit;
}

// Obtener el nombre de usuario de la sesión
$nombreUsuario = $_SESSION['txtNombre'];
?>

<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="img/log.png" type="image/x-icon">
  <title>Plaza - Jardin</title>
  <link rel="icon" src="img/porta.png">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="p-3 m-0 border-0 bd-example">
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="icon-link" href="#">
        <img class="img-fluid" src="img/chef2.png" width="50px" height="50px"></img>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <!--Si es ADMINISTRADOR O MESERO SIGNIFICA QUE SE LE MOSTRARA LO SIGUIENTE (todo el menu)-->
          <?php if ($idRol == 1 || $idRol == 2) { ?>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="inicio.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="personal.php">Personal</a>
            </li>
 <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Registro de servicios</a>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="platillo.php">Registro de platillos</a></li>
        <li><a class="dropdown-item" href="bebida.php">Registro de bebida</a></li>
        <li><a class="dropdown-item" href="postre.php">Registro de Postre</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="user1.php">Registro de usuario</a></li>
        <li><a class="dropdown-item" href="mesa.php">Registro de mesas</a></li>
        <li><a class="dropdown-item" href="rol.php">Registro de rol</a></li>
        <li><a class="dropdown-item" href="unidad.php">Registro de unidad</a></li>
      </ul>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Cocina</a>
  </li>
  <li class="nav-item">
    <a class="nav-link ">Estado del pedido</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Cuenta</a>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="comanda.php">Comanda</a></li>
        <li><a class="dropdown-item" href="detallecomanda.php">Detalle de comanda</a></li>
        
       
      </ul>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Insumos</a>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="insumo.php">Insumos</a></li>
        <li><a class="dropdown-item" href="insumoplatillo.php">Insumos platillos</a></li>
        <li><a class="dropdown-item" href="insumobebida.php">Insumos bebidas</a></li>
        <li><a class="dropdown-item" href="insumopostre.php">Insumos postre</a></li>
        
       
      </ul>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Reportes</a>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="reporte-bebidas.php">Reporte de bebidas</a></li>
        <li><a class="dropdown-item" href="reporte-platillos.php">Reporte de platillos</a></li>
        <li><a class="dropdown-item" href="reporte-postres.php">Reporte de postre</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="reporte-usuarios.php">Reporte de usuarios</a></li>
        <li><a class="dropdown-item" href="mesa.php">Reporte de bitacora</a></li>
  
      </ul>
  </li>
<!--Si no es ADMINISTRADOR O MESERO SIGNIFICA QUE ES CLIENTE ASI QUE SE LE MOSTRARA LO SIGUIENTE-->
          <?php } elseif ($idRol == 3) { ?>
            <li class="nav-item">
              <a class="nav-link" href="comanda.php">Comanda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="detallecomanda.php">Detalle de comanda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Estado del pedido</a>
            </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </nav>
  
 <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/p1.png" class="d-block w-100" alt="..." >
    </div>
    <div class="carousel-item">
      <img src="img/mole.png" class="d-block w-100" alt="..." >
    </div>
    <div class="carousel-item">
      <img src="img/preparacion.png" class="d-block w-100" alt="..." >
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>
  <br>
  
  <div class="row">
    <div class="col-3">
      <a class="btn btn-danger text-white fw-semibold shadow-sm" href="index.php" role="button">CERRAR SESION</a>
    </div>
  </div>
  
  <div class="row mt-3">
    <div class="col-12">
      <h3>Bienvenid@, <?php echo $nombreUsuario; ?></h3>
    </div>
  </div>
</body>
</html>
