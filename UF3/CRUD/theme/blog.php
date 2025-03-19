  <?php
  session_start();
  require_once('config.php');



  //agarramos las news de bbdd
  $resultNews = $mysqli->query('SELECT * FROM NEWS');
  $news = $resultNews->fetch_all(MYSQLI_ASSOC);


  ?>
  <?php include 'header.php'; ?>

  <body>




    <!-- page-title -->
    <section class="page-title bg-cover" data-background="https://assets.goal.com/images/v3/bltb8fe5986e586682e/GettyImages-989679778.jpg?auto=webp&format=pjpg&width=3840&quality=60">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h1 class="display-1 text-white font-weight-bold font-primary">Nuestro Blog</h1>
          </div>
        </div>
      </div>
    </section>
    <!-- /page-title -->

    <!-- blog -->
    <section class="section">
      <div class="container">
        <div class="row">

          <?php
          foreach ($news as $new) { ?>
            <div class="col-lg-4 col-md-6 mb-4">
              <article class="card">
                <img src="<?php echo $new['thumbnail'] ?>" alt="<?php echo $new['title'] ?>" class="card-img-top mb-2">
                <div class="card-body p-0"> 
                  <time><?php echo $new['new_data'] ?></time>
                  <a href="blog-single.php?id=<?php echo $new['id'] ?>" class="h4 card-title d-block my-3 text-dark hover-text-underline"><?php echo $new['title'] ?></a>
                  <p><?php echo $new['description'] ?></p>
                  <a href="blog-single.php?id=<?php echo $new['id'] ?>" class="btn btn-transparent">Leer mas</a>
                </div>
              </article>
            </div>
          <?php } ?>

          

        </div>
      </div>
    </section>
    <!-- /blog -->

    <!-- footer -->
    <?php include 'footer.php'; ?>
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