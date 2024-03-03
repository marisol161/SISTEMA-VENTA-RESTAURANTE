<!DOCTYPE html>
<html>
<head>
  <title>Menú en Carrusel</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <style>
    body {
      margin: 0;
      padding: 0;
    }

    .section {
      position: relative;
      width: 100%;
      height: 100vh;
      background-image: url('img/imgPlaza.png');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }

    @media (max-width: 768px) {
      #section1 {
        background-size: contain;
      }
    }

    .navbar {
      background-color: #000000;
    }

    .navbar-toggler {
      border: none;
      color: #ffffff;
      background-color: #000000;
    }

    .navbar-brand,
    .navbar-nav .nav-link {
      color: #ffffff !important;
    }

    .navbar-nav .nav-item:not(:last-child) {
      margin-right: 1rem;
    }

    .navbar-toggler-icon {
      background-color: #ffffff;
    }

    .navbar .collapsed .navbar-toggler-icon {
      background-color: #ffffff;
    }

    .footer {
      background-color: #000000;
      color: #ffffff;
      padding: 20px 0;
    }

    h5 {
      color: #ffffff bold;
    }

    p {
      color: #ffffff bold;
    }

    .carousel-item img {
      object-fit: cover;
      height: 700px; /* Altura fija para las imágenes */
      max-width: 100%; /* Ajuste máximo del ancho */
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="img/porta.png" alt="Logo" width="150" height="100">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" href="login.php" aria-current="page">INICIAR SESIÓN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">INICIO</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#section2">¿QUIENES SOMOS?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="menu.php">MENU</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#section4">¿COMO LLEGAR?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">REGISTRARSE</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<section class="menuP" id="section3">
  <div id="carouselMenu" class="carousel slide" data-ride="carousel" data-interval="3000">
    <ol class="carousel-indicators">
      <li data-target="#carouselMenu" data-slide-to="0" class="active"></li>
      <li data-target="#carouselMenu" data-slide-to="1"></li>
      <li data-target="#carouselMenu" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/platillo.png" class="d-block w-100"  alt="Platillos">
        <div class="carousel-caption d-none d-md-block">
          <h5>Platillos</h5>
          <p>Deliciosos platillos para disfrutar</p>
          <a href="#" class="btn btn-primary">Ver platillos</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/bebidas.png" class="d-block w-100"  alt="Bebidas">
        <div class="carousel-caption d-none d-md-block">
          <h5>Bebidas</h5>
          <p>Refrescantes bebidas para acompañar tu comida</p>
          <a href="#" class="btn btn-primary">Ver bebidas</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/postres.png" class="d-block w-100"  alt="Postres">
        <div class="carousel-caption d-none d-md-block">
          <h5>Postres</h5>
          <p>Dulces y deliciosos postres para endulzar tu paladar</p>
          <a href="#" class="btn btn-primary">Ver postres</a>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselMenu" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselMenu" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>
  </div>
</section>

<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h5>RESTAURANTE</h5>
        <p>Un equipo de profesionales que hemos creado el restaurante donde nos gustaría comer a diario y en las ocasiones especiales. Con menú o a la carta. Con amigos o con clientes, con tiempo para disfrutar o con algo más de prisa porque el trabajo lo requiere.</p>
      </div>
      <div class="col-md-4">
        <h5>CONTÁCTANOS</h5>
        <p>Información de contacto</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="https://www.facebook.com/"><img src="img/facebook.png"></a></li>
          <li class="list-inline-item"><a href="https://web.whatsapp.com/"><img src="img/whatsappp.png"></a></li>
          <li class="list-inline-item"><a href="https://www.instagram.com/"><img src="img/instagram.png"></a></li>
          <li class="list-inline-item"><a href="https://twitter.com/"><img src="img/twitter.png"></a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h5>INFORMACION</h5>
        <p>Copyright © 2023 Plaza - Jardin|  Política de Privacidad, Aviso Legal y Cookies - Condiciones generales</p>
      </div>
    </div>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
