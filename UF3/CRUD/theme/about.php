<?php include 'header.php'; ?>
<?php
//agarramos las news de bbdd
$resultNews = $mysqli->query('SELECT * FROM NEWS');
$news = $resultNews->fetch_all(MYSQLI_ASSOC);


//agarramos los usuarios de bbdd
$resultUsers = $mysqli->query('SELECT * FROM USERS');
$users = $resultUsers->fetch_all(MYSQLI_ASSOC);

//agarramos los testimonios de bbdd
$resultTestimonials = $mysqli->query('SELECT * FROM TESTIMONIALS');
$testimonials = $resultTestimonials->fetch_all(MYSQLI_ASSOC);

?>



<!-- page-title -->
<section class="page-title bg-cover" data-background="https://assets.goal.com/images/v3/bltb8fe5986e586682e/GettyImages-989679778.jpg?auto=webp&format=pjpg&width=3840&quality=60">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="display-1 text-black font-weight-bold font-primary">Acerca de nosotros</h1>
      </div>
    </div>
  </div>
</section>
<!-- /page-title -->

<!-- video -->
<section class="section pb-0">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="overlay-secondary video-player">
          <img src="https://estaticos-cdn.prensaiberica.es/clip/92460d71-72df-4c4f-8150-1da656f1a1e3_alta-libre-aspect-ratio_default_0.jpg" alt="video-thumb" class="img-fluid w-100">
          <a class="play-icon">
            <i class="text-center icon-sm icon-box-sm rounded-circle text-white bg-gradient-primary d-block ti-control-play content-center"
              data-video="https://youtu.be/CpxNpeCb6nc?autoplay=1">
              <div class="ripple"></div>
            </i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /video -->

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

    <div class="row"> <!-- Fila contenedora para los usuarios -->
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
                <i><?= htmlspecialchars($user['role']) ?></i>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div> <!-- Cierre de la fila contenedora -->
    </div>
</section>
<!-- /team -->

<!-- testimonial-slider -->
<section class="section bg-secondary">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="text-white mb-5">Testimonios de nuestros clientes</h2>
      </div>
    </div>
    <div class="row bg-contain" data-background="images/backgrounds/cta-bg.jpg">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div id="slider" class="ui-card-slider bg-contain">
          <?php foreach ($testimonials as $testimonial): ?>
            <div class="slide">
              <div class="card text-center">
                <div class="card-body px-5 py-4">
                  <img src="<?= htmlspecialchars($testimonial['photo']) ?>" alt="<?= htmlspecialchars($testimonial['photo']) ?>" class="img-fluid rounded-circle mb-4 w-50">
                  <h4 class="text-secondary"><?= htmlspecialchars($testimonial['name']) ?></h4>
                  <p><?= htmlspecialchars($testimonial['description']) ?> <?= htmlspecialchars($testimonial['rating']) ?> </p>

                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /testimonial-slider -->

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