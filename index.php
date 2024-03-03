<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Plaza - Jardin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="img/porta.png" type="image/x-icon">

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

    /* Estilos para los párrafos del segundo section */
    #section4 p:nth-of-type(-n+2) {
      font-family: 'Dancing Script', cursive;
    }

    #section4 p:nth-of-type(n+3) {
      font-family: 'Unna', serif;
    }
  </style>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Unna&display=swap" rel="stylesheet">
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

  <section class="section" id="section1">
  <div class="container-fluid d-flex justify-content-center align-items-center h-100">
      <div>
        <div class="text-center fs-4 fw-light">
          RESTAURANT
        </div>
        <div class="text-center fs-1 fw-bold">
          PLAZA - JARDIN
        </div>
      </div>
    </div>
  </section>

  
  <section class="somos my-5" id="section2">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <p style="text-align: justify;">UN CONCEPTO NUEVO</p>
        <p style="text-align: justify;">- Modernos en el estilo y clásicos en el sabor.</p>
        <p style="text-align: justify;">
          - Un equipo de profesionales que hemos creado el restaurante donde nos gustaría comer a diario y en las ocasiones especiales. Con menú o a la carta. Con amigos o con clientes, con tiempo para disfrutar o con algo más de prisa porque el trabajo lo requiere.
        </p>
        <p style="text-align: justify;">- Firmes defensores de que la calidad no está en el precio, sino en el producto.</p>
        <p style="text-align: justify;">
          - Exigentes porque también somos consumidores y estamos convencidos de que la experiencia debe resultar completa.
        </p>
        <p style="text-align: justify;">
          - Un buen restaurante debe serlo por la comida, pero también por el trato y el entorno, por la decoración y el ambiente.
        </p>
        <p style="text-align: justify;">- Somos nuevos, pero también somos expertos.</p>
        <p style="text-align: justify;">
          Plaza-Jardín muestra tradición y cultura, no ha permitido crecer y crecer. Sabemos más y queremos demostrarlo.
        </p>
      </div>
      <div class="col-md-6">
        <br>
        <br>
        <img class="img-fluid" src="img/comer.png" alt="" style="border-radius: 20px; max-height: 400px;">
      </div>
    </div>
  </div>
</section>



  <section class="llegar my-5" id="section4">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <br>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3755.6281065737494!2d-99.46630988855208!3d19.728451231088357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d23e73d777e5f5%3A0x4f381f4489554507!2sPlaza%20Jard%C3%ADn!5e0!3m2!1sen!2smx!4v1626028437114!5m2!1sen!2smx" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="col-md-6">
          <br>
          <p>Restaurante Plaza - Jardin</p>
          <p>Un restaurante especial en villa del carbón</p>
          <p>Visitanos en Calle México 5, Mex 5, Villa del carbón, C.P.54300 Villa del carbón, Mex.</p>
          <p><img src="img/llamada-telefonica.png"> LLámanos: +52 58 891 302 04</p>
          <p><img src="img/dias-del-calendario.png"> Horario: </p>
          <p>Lunes a viernes de 08:00 a.m. a 18:00 p.m.</p>
          <p>Sabado de 08:00 a.m. a 19:00 p.m.</p>
          <p>Domingos de 09:00 a.m. a 16:00 p.m.</p>
        </div>
      </div>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
