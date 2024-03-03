<?php
// Inicio de sesión
session_start();

?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilo.css">
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
  <form action="loguear.php" method="post">
    <div> 
      <div class="text-center fs-1 fw-bold">
        <img 
          src="img/house.png" 
          alt="password-icon" 
          style="height: 2.5rem"
          align="left">
        LOGIN
      </div>
      <div class="input-group mt-4">
        <div class="input-group-text bg-info-subtle">
          <img 
            src="img/usuario.png" 
            alt="password-icon" 
            style="height: 1rem">
        </div>
        <input name='txtNombre' class="form-control bg-light" type="text" placeholder="USUARIO">
      </div>
      <div class="input-group mt-1">
        <div class="input-group-text bg-info-subtle">
          <img 
            src="img/candado.png" 
            alt="password-icon" 
            style="height: 1rem">
        </div>
        <input name='txtPassworde' class="form-control bg-light" type="password" placeholder="******">
      </div>
      <button class="btn btn-secondary text-white w-100 mt-4 fw-semibold shadow-sm" type="submit">INICIAR SESION</button>
    </div>
  </form>
</body>
</html>
