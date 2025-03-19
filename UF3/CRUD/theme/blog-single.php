    <?php
    require_once('config.php');
    session_start();
    //agarramos las news de bbdd
    $resultNews = $mysqli->query('SELECT * FROM NEWS  where id=' . $_GET['id']);
    $news = $resultNews->fetch_all(MYSQLI_ASSOC);
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
              <h3 class="font-tertiary mb-5">What should be the proper purpose of UI and UX design?</h3>
              <img src="images/blog/post-1.jpg" alt="post-thumb" class="img-fluid w-100 mb-3">
              <p class="float-left mr-4">Post by Themefisher</p>
              <p>May 26, 2017</p>
              <div class="content">
                <p>Ne erat velit invidunt his. Eum in dicta veniam interesset, harum fuisset te nam ea cu lupta
                  definitionem
                  eos. Ei mea dicant meliore, ad mea erant bonorum, in eam iusto invenire. Ei mea dicant meliore, ad
                  mea erant bonorum, in eam iusto invenire.</p>
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
                <div class="media border-bottom py-4">
                  <img src="images/user-1.jpg" class="img-fluid align-self-start mr-3" alt="">
                  <div class="media-body">
                    <h5 class="mb-0 text-secondary">Carole Marvin.</h5>
                    <span class="mr-3">15 january 2015 At 10:30 pm</span>
                    <a href="#" class="btn btn-transparent py-1 px-2 "><i class="ti-share-alt"></i> Reply</a>
                    <p>Ne erat velit invidunt his. Eum in dicta veniam interesset, harum fuisset te nam ea cu lupta
                      definitionem.</p>
                    <div class="media my-5">
                      <img src="images/user-2.jpg" class="img-fluid align-self-start mr-3" alt="">
                      <div class="media-body">
                        <h5 class="mb-0 text-secondary">Jaquan Rolfson.</h5>
                        <span class="mr-3">15 january 2015 At 10:30 pm</span>
                        <a href="#" class="btn btn-transparent py-1 px-2 "><i class="ti-share-alt"></i> Reply</a>
                        <p>Ne erat velit invidunt his. Eum in dicta veniam interesset, harum fuisset te nam ea cu lupta
                          definitionem.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="media py-4">
                  <img src="images/user-1.jpg" class="img-fluid align-self-start mr-3" alt="">
                  <div class="media-body">
                    <h5 class="mb-0 text-secondary">Bruce Bernier.</h5>
                    <span class="mr-3">15 january 2015 At 10:30 pm</span>
                    <a href="#" class="btn btn-transparent py-1 px-2 "><i class="ti-share-alt"></i> Reply</a>
                    <p>Ne erat velit invidunt his. Eum in dicta veniam interesset, harum fuisset te nam ea cu lupta
                      definitionem.</p>
                  </div>
                </div>
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
              <h2>Latest News</h2>
              <div class="section-border"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
              <article class="card">
                <img src="images/blog/post-1.jpg" alt="post-thumb" class="card-img-top mb-2">
                <div class="card-body p-0">
                  <time>January 15, 2018</time>
                  <a href="blog-single" class="h4 card-title d-block my-3 text-dark hover-text-underline">How These Different
                    Book Covers Reflect the Design</a>
                  <a href="#" class="btn btn-transparent">Read more</a>
                </div>
              </article>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
              <article class="card">
                <img src="images/blog/post-2.jpg" alt="post-thumb" class="card-img-top mb-2">
                <div class="card-body p-0">
                  <time>January 15, 2018</time>
                  <a href="blog-single" class="h4 card-title d-block my-3 text-dark hover-text-underline">How These Different
                    Book Covers Reflect the Design</a>
                  <a href="#" class="btn btn-transparent">Read more</a>
                </div>
              </article>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
              <article class="card">
                <img src="images/blog/post-3.jpg" alt="post-thumb" class="card-img-top mb-2">
                <div class="card-body p-0">
                  <time>January 15, 2018</time>
                  <a href="blog-single" class="h4 card-title d-block my-3 text-dark hover-text-underline">How These Different
                    Book Covers Reflect the Design</a>
                  <a href="#" class="btn btn-transparent">Read more</a>
                </div>
              </article>
            </div>
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