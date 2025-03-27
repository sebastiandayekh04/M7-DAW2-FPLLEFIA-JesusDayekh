<?php
session_start();
require_once('config.php');
// Consulta para obtener los proyectos
$result = $mysqli->query('SELECT * FROM PROJECTS');
//print_r($result);
$project = $result->fetch_all(MYSQLI_ASSOC);

//print_r($projects);


//agarramos las news de bbdd
$resultNews = $mysqli->query('SELECT * FROM NEWS');
$news = $resultNews->fetch_all(MYSQLI_ASSOC);

//agarramos los usuarios de bbdd
$resultUsers = $mysqli->query('SELECT * FROM USERS');
$users = $resultUsers->fetch_all(MYSQLI_ASSOC);

?>
<!DOCTYPE html>



<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Inicio</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- theme meta -->
  <meta name="theme-name" content="agen" />

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <!-- venobox css -->
  <link rel="stylesheet" href="plugins/venobox/venobox.css">
  <!-- card slider -->
  <link rel="stylesheet" href="plugins/card-slider/css/style.css">

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>

<body>

  <header class="navigation fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="Egen"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
        aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse text-center" id="navigation">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="blog.php">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="portafolio.php">Portafolio</a>
          </li>
          <nav class="d-flex align-items-center">
            <div class="dropdown">

              <?php if (isset($_SESSION['user_id'])): ?>
                <img src="<?= htmlspecialchars($_SESSION['user_avatar']) ?>" alt="Avatar" class="rounded-circle me-2 " width="40" height="40" ">
                                <span class=" text-light me-3"><?= htmlspecialchars($_SESSION['user_name']) ?></span>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                  <li><a class="dropdown-item" href="logout.php">Cerrar Sesión</a></li>

                  <?php if ($_SESSION['user_rol'] == 'admin'): ?>
                    <li><a class="dropdown-item" href="Admin.php">Panel de Administración</a></li>
                  <?php endif; ?>

                </ul>
              <?php else: ?>
                <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt="Avatar" class="rounded-circle me-2 dropdown-toggle" width="40" height="40" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="cursor: pointer;">
                <span class="text-light me-3">Invitado</span>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                  <li><a class="dropdown-item" href="login.php">Iniciar Sesión</a></li>
                  <li><a class="dropdown-item" href="register.php">Registrarse</a></li>
                </ul>
              <?php endif; ?>
            </div>
          </nav>
          </li>
        </ul>
      </div>
    </nav>
  </header>



  <!-- banner -->
  <section class="banner bg-cover position-relative d-flex justify-content-center align-items-center"
    data-background="https://assets.goal.com/images/v3/bltb8fe5986e586682e/GettyImages-989679778.jpg?auto=webp&format=pjpg&width=3840&quality=60">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <h1 class="display-1 text-black font-weight-bold font-primary">Locos del futbol</h1>
        </div>
      </div>
    </div>
  </section>
  <!-- /banner -->
  <!-- Servicios -->
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 mx-auto text-center">
          <h2 class="section-title">Nuestros Servicios</h2>
          <p class="lead">Tu fuente de información y entretenimiento sobre el mundo del deporte, el fútbol y las estrellas más destacadas.</p>
          <div class="section-border"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 mb-4 mb-lg-0">
          <div class="card hover-bg-secondary shadow py-4 active">
            <div class="card-body text-center">
              <div class="position-relative">
                <i class="icon-lg icon-box bg-gradient-primary rounded-circle ti-crown mb-5 d-inline-block text-white"></i>
                <i class="icon-lg icon-watermark text-white ti-crown"></i>
              </div>
              <h4 class="mb-4">Cobertura Exclusiva</h4>
              <p>Entrevistas, reportajes y contenido exclusivo sobre tus jugadores y equipos favoritos.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0">
          <div class="card hover-bg-secondary shadow py-4">
            <div class="card-body text-center">
              <div class="position-relative">
                <i class="icon-lg icon-box bg-gradient-primary rounded-circle ti-stats-up mb-5 d-inline-block text-white"></i>
                <i class="icon-lg icon-watermark text-white ti-stats-up"></i>
              </div>
              <h4 class="mb-4">Análisis y Estadísticas</h4>
              <p>Datos en tiempo real, clasificaciones y rendimiento de los equipos y jugadores.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4 mb-lg-0">
          <div class="card hover-bg-secondary shadow py-4">
            <div class="card-body text-center">
              <div class="position-relative">
                <i class="icon-lg icon-box bg-gradient-primary rounded-circle ti-microphone-alt mb-5 d-inline-block text-white"></i>
                <i class="icon-lg icon-watermark text-white ti-microphone-alt"></i>
              </div>
              <h4 class="mb-4">Noticias y Eventos</h4>
              <p>Últimas noticias, partidos en vivo y cobertura de los eventos deportivos más importantes.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /Servicios -->




  <!-- team -->
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 mx-auto text-center">
          <h2>Nuestro Equipo</h2>
          <p>Famosos y deportistas</p>
          <div class="section-border"></div>
        </div>
      </div>
      <?php
      // Suponiendo que $news ya contiene todas las noticias ordenadas por fecha descendente
      $latestUsers = array_slice($users, 0, 4);
      ?>
      <div class="row"> <!-- Fila contenedora para los usuarios -->
        <?php foreach ($latestUsers as $user): ?>
          <div class="col-lg-3 col-sm-6"> <!-- 4 elementos por fila -->
            <div class="card hover-shadow">
              <img src="<?= htmlspecialchars($user['avatar']) ?>" alt="<?= htmlspecialchars($user['name']) ?>" class="card-img-top">
              <div class="card-body text-center position-relative zindex-1">
                <h4><a class="text-dark" href="team-single.html"><?= htmlspecialchars($user['name']) ?></a></h4>
                <i><?= htmlspecialchars($user['rol']) ?></i>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div> <!-- Cierre de la fila contenedora -->
    </div>
  </section>
  <!-- /team -->


  <!-- about -->
  <section class="section-lg position-relative bg-cover" data-background="images/backgrounds/about-bg.jpg">
    <img src="images/backgrounds/about-bg-overlay.png" alt="overlay" class="overlay-image img-fluid">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-6 col-md-8 col-sm-7 col-8">
          <h2 class="text-white mb-4">Quienes somos</h2>
          <p class="text-light mb-4">Pasión, emoción y deporte en un solo lugar. Somos la mejor agencia de noticias
            deportivas y entretenimiento. Con nosotros podrás disfrutar de contenido exclusivo, entrevistas con tus
            deportistas favoritos y mucho más.</p>
          <a href="about.html" class="btn btn-primary">Leer mas</a>
        </div>
        <div class="col-md-2 col-sm-4 col-4 text-right align-self-end">
          <a class="venobox" data-autoplay="true" data-vbtype="video"
            href="https://www.youtube.com/watch?v=jrkvirglgaQ"><i
              class="text-center icon-sm icon-box rounded-circle text-white bg-gradient-primary d-block ti-control-play"></i></a>
        </div>
      </div>
    </div>
  </section>
  <!-- /about -->

  <!-- project -->
  <section class="section">
    <div class="container-fluid px-0">
      <div class="row">
        <div class="col-lg-10 mx-auto text-center">
          <h2>Nuestros Proyectos</h2>
          <div class="section-border"></div> <!-- Sección de borde única -->
        </div>
      </div>

      <?php
      // Suponiendo que $news ya contiene todas las noticias ordenadas por fecha descendente
      $latestproject = array_slice($project, 0, 3);
      ?>
      <div class="row no-gutters shuffle-wrapper">
        <!-- AQUI PONDRAS UN FOREACH DE PHP E IRAS RECORRIENDO EL ARRAY PROJECTS -->
        <?php foreach ($latestproject as $projects): ?>
          <div class="col-lg-4 col-md-6 shuffle-item">
            <div class="project-item">
              <img src="<?= htmlspecialchars($projects['thumbnail']) ?>" alt="<?= htmlspecialchars($projects['description']) ?>" class="img-fluid w-100">
              <div class="project-hover bg-secondary px-4 py-3">
                <p class="text-white h4"><?= htmlspecialchars($projects['title']) ?></p>
                <a href="#"><i class="ti-link icon-xs text-white"><?= htmlspecialchars($projects['url']) ?></i></a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div> <!-- Cierre de shuffle-wrapper -->

    </div> <!-- Cierre de container-fluid -->
  </section>
  <!-- /project -->



  <!-- call to action -->
  <section>
    <div class="container section-sm overlay-secondary-half bg-cover" data-background="https://www.mundodeportivo.com/us/files/article_main_microformat/files/fp/uploads/2022/12/17/639e7660ef845.r_d.605-349-11111.jpeg">
      <div class="row">
        <div class="col-lg-8 offset-lg-1">
          <h2 class="text-gradient-primary">Empieza con nosotros</h2>
          <p class="h4 font-weight-bold text-white mb-4">¿Tienes dudas? ¡Escribenos!</p>
          <a href="contact.html" class="btn btn-lg btn-primary">Haz click aca</a>
        </div>
      </div>
    </div>
  </section>
  <!-- /call to action -->

  <!-- pricing -->
  <section class="section pb-0">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 mx-auto text-center">
          <h2>Suscripciones para Fanáticos</h2>
          <p>Disfruta del mejor contenido sobre fútbol, deportes y celebridades</p>
          <div class="section-border"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
          <div class="card bottom-shape bg-secondary pt-4 pb-5">
            <div class="card-body text-center">
              <h4 class="text-white">Plan Aficionado</h4>
              <p class="text-light mb-4">Contenido exclusivo para seguidores</p>
              <p class="text-white mb-4">$ <span class="display-3 font-weight-bold vertical-align-middle">10</span>/mes</p>
              <ul class="list-unstyled mb-5">
                <li class="text-white mb-3">Noticias deportivas en tiempo real</li>
                <li class="text-white mb-3">Entrevistas exclusivas</li>
                <li class="text-white mb-3">Resúmenes de partidos</li>
                <li class="text-white mb-3">Acceso anticipado a contenido especial</li>
                <li class="text-white mb-3">Foros de discusión con otros fanáticos</li>
              </ul>
              <a href="#" class="btn btn-outline-light">Suscribirse</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
          <div class="card bottom-shape bg-secondary pt-4 pb-5">
            <div class="card-body text-center">
              <h4 class="text-white">Plan Profesional</h4>
              <p class="text-light mb-4">Para los verdaderos amantes del fútbol</p>
              <p class="text-white mb-4">$ <span class="display-3 font-weight-bold vertical-align-middle">20</span>/mes</p>
              <ul class="list-unstyled mb-5">
                <li class="text-white mb-3">Todo lo del Plan Aficionado</li>
                <li class="text-white mb-3">Acceso a documentales exclusivos</li>
                <li class="text-white mb-3">Análisis tácticos de expertos</li>
                <li class="text-white mb-3">Participación en sorteos de camisetas</li>
                <li class="text-white mb-3">Cobertura especial de eventos deportivos</li>
              </ul>
              <a href="#" class="btn btn-outline-light">Suscribirse</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
          <div class="card bottom-shape bg-secondary pt-4 pb-5">
            <div class="card-body text-center">
              <h4 class="text-white">Plan Leyenda</h4>
              <p class="text-light mb-4">Vive la experiencia VIP del fútbol</p>
              <p class="text-white mb-4">$ <span class="display-3 font-weight-bold vertical-align-middle">50</span>/mes</p>
              <ul class="list-unstyled mb-5">
                <li class="text-white mb-3">Todo lo del Plan Profesional</li>
                <li class="text-white mb-3">Acceso a eventos y entrevistas en vivo</li>
                <li class="text-white mb-3">Experiencias exclusivas con jugadores</li>
                <li class="text-white mb-3">Acceso VIP a partidos y backstage</li>
                <li class="text-white mb-3">Merchandising oficial autografiado</li>
              </ul>
              <a href="#" class="btn btn-outline-light">Suscribirse</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /pricing -->

  <?php
  // Suponiendo que $news ya contiene todas las noticias ordenadas por fecha descendente
  $latestNews = array_slice($news, 0, 3);
  ?>

  <!-- blog -->
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 mx-auto text-center">
          <h2>Últimas Noticias</h2>
          <div class="section-border"></div>
        </div>
      </div>
      <div class="row">
        <?php foreach ($latestNews as $item): ?>
          <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
            <div class="card hover-shadow">
              <img src="<?= htmlspecialchars($item['thumbnail']) ?>" alt="<?= htmlspecialchars($item['title']) ?>" class="card-img-top">
              <div class="card-body text-center">
                <h4><a class="text-dark" href="blog-single.html"><?= htmlspecialchars($item['title']) ?></a></h4>

                <p class="text-gray-700 text-sm"><?= htmlspecialchars($item['subtitle']) ?></p>
                <p class="text-xs text-gray-500 mt-2"><?= htmlspecialchars($item['new_data']) ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>
  <!-- /blog -->


  <!-- footer -->
  <?php include 'footer.php' ?>
  <!-- /footer -->

  <!-- jQuery -->
  <script src="plugins/jQuery/jquery.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="plugins/bootstrap/bootstrap.min.js"></script>
  <!-- slick slider -->
  <script src="plugins/slick/slick.min.js"></script>
  <!-- venobox -->
  <script src="plugins/venobox/venobox.min.js"></script>
  <!-- shuffle -->
  <script src="plugins/shuffle/shuffle.min.js"></script>
  <!-- apear js -->
  <script src="plugins/counto/apear.js"></script>
  <!-- counter -->
  <script src="plugins/counto/counTo.js"></script>
  <!-- card slider -->
  <script src="plugins/card-slider/js/card-slider-min.js"></script>
  <!-- google map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
  <script src="plugins/google-map/gmap.js"></script>

  <!-- Main Script -->
  <script src="js/script.js"></script>

</body>

</html>