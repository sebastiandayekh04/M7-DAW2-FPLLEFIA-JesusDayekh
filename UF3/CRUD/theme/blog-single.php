    <?php
    session_start();
    require_once('config.php');

    //agarramos las news de bbdd
    $resultNews = $mysqli->query('SELECT * FROM NEWS where id=' . $_GET['id']);
    $news = $resultNews->fetch_all(MYSQLI_ASSOC);

    // Obtener los comentarios con la información del usuario
    $resultComments = $mysqli->query(
      "
    SELECT COMMENTS.*, USERS.name, USERS.avatar 
    FROM COMMENTS 
    INNER JOIN USERS ON COMMENTS.user_id = USERS.id 
    WHERE COMMENTS.new_id = " . $_GET['id']
    );

    $comments = $resultComments->fetch_all(MYSQLI_ASSOC);


    ?>
    <?php include 'header.php'; ?>

    <body>

      <!-- page-title -->
      <section class="page-title bg-cover" data-background="https://assets.goal.com/images/v3/bltb8fe5986e586682e/GettyImages-989679778.jpg?auto=webp&format=pjpg&width=3840&quality=60">
      </section>
      <!-- /page-title -->

      <section class="section">
        <div class="container">
          <div class="row">
            <div class="col-lg-10 mx-auto">
              <h3 class="font-tertiary mb-5"><?= $news[0]['title'] ?></h3>
              <img src="<?= $news[0]['thumbnail'] ?>" alt="<?= $news[0]['title'] ?>" class="img-fluid w-100 mb-3">
              <p class="float-left mr-4">Post by <?= $users[5]['name']  ?></p>
              <p><?= $news[0]['new_data'] ?></p>
              <div class="content">
                <p><?= $news[0]['description'] ?></p>
              </div>
            </div>

          </div>
        </div>
      </section>

      <section>
        <div class="container">
          <div class="row">
            <div class="col-lg-10 mx-auto">
              <div class="p-5 mb-4">
                <h4 class="mb-3 pb-3 text-secondary">Comentarios</h4>

                <?php foreach ($comments as $comment): 
                  
                  ?>
             
                    <div class="media border-bottom py-4">
                      <img src="<?= htmlspecialchars($comment['avatar']) ?>" class="rounded-circle img-fluid" style="width: 50px;" alt="User Avatar">
                      <div class="media-body">
                        <h5 class="mb-0 text-secondary"><?= htmlspecialchars($comment['name']) ?></h5>
                        <span class="mr-3"><?= htmlspecialchars($comment['date']) ?></span>
                        <a href="#" class="btn btn-transparent py-1 px-2"><i class="ti-share-alt"></i> Reply</a>
                        <p><?= htmlspecialchars($comment['description']) ?></p>
                      </div>
                    </div>
             
                  <?php if ($comment['comment_id'] >= 1) { ?>

                    <div class="media my-5">
                      <img src="<?= htmlspecialchars($comment['avatar']) ?>" class="img-fluid  rounded-circle me-3" style="width: 50px" alt="">
                      <div class="media-body">
                        <h5 class="mb-0 text-secondary"><?= htmlspecialchars($comment['name']) ?></h5>
                        <span class="mr-3"><?= htmlspecialchars($comment['date']) ?></span>
                        <a href="#" class="btn btn-transparent py-1 px-2 "><i class="ti-share-alt"></i> Reply</a>
                        <p><?= htmlspecialchars($comment['description']) ?></p>
                      </div>
                    </div>
                  <?php } ?>
                <?php endforeach; ?>



              </div>
              <h4 class="mb-3 pb-3 text-secondary">Leave a Comment</h4>
              <form action="#" class="row">
                <div class="col-12">
                  <textarea name="comment" id="comment" placeholder="Message" class="form-control mb-4 border"></textarea>
                </div>
                <div class="col-md-5">
                  <input type="text" name="name" id="name" class="form-control mb-4 mb-lg-0 border" placeholder="Name">
                </div>
                <div class="col-md-5">
                  <input type="email" name="Email" id="Email" class="form-control mb-4 mb-lg-0 border" placeholder="Email">
                </div>
                <div class="col-md-2">
                  <button type="submit" class="btn btn-secondary rounded-0">Send</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>



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
            <?php foreach ($news as $item): ?>
              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="card hover-shadow">
                  <img src="<?= htmlspecialchars($item['thumbnail']) ?>" alt="<?= htmlspecialchars($item['title']) ?>" class="card-img-top">
                  <div class="card-body text-center">
                    <h4><a class="text-dark" href="blog-single.html"><?= htmlspecialchars($item['title']) ?></a></h4>
                    <p class="text-gray-600 mb-2"><?= htmlspecialchars($item['subtitle']) ?></p>
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