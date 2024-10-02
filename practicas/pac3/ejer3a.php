<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.72.0">
  <title>Album example · Bootstrap</title>

  <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/album/">



  <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


</head>

<body>

<?php 
$idolos = [
  ["nombre" => "Hector", "apellido" => "Lavoe", "descripcion" => "Me hizo amar la musica salsa", "foto" => "https://cdn.aarp.net/content/dam/aarpe/es/home/entretenimiento/expertos/ernesto-lechner/info-2016/fotos-hector-lavoe-cumpliria-70-en-el-2016/_jcr_content/root/container_main/container_body_main/list_container_body3/container_body_cf/body_three_cf_listicle_fifteen/cfimage.coreimg.50.932.jpeg/content/dam/aarp/entertainment/art_music/2016/10/1140-ss-hector-lavoe-microphone-concert-portrait-esp.jpg"],
  ["nombre" => "Ronaldo", "apellido" => "Cristiano","descripcion" => "El mejor futbolista de la historia", "foto" => "https://ca-times.brightspotcdn.com/dims4/default/5c7a039/2147483647/strip/true/crop/4491x3062+0+0/resize/1200x818!/quality/75/?url=https%3A%2F%2Fcalifornia-times-brightspot.s3.amazonaws.com%2F2d%2Fb7%2F713fcd9bc03dc27561bef9816e70%2F6d860659637343d2b9337b328bca9378"],
  ["nombre" => "Alfredo", "apellido" => "Pacino",  "descripcion" => "El mejor actor de la historia", "foto" => " https://www.lavanguardia.com/files/content_image_mobile_filter/uploads/2020/04/24/5fa8fcca119ed.jpeg"],
  ["nombre" => "Adam", "apellido" => "Sandler",  "descripcion" => "De los mejores actores, aunque muy vago", "foto" => " https://upload.wikimedia.org/wikipedia/commons/thumb/3/39/Adam_Sandler_at_Berlinale_2024.jpg/640px-Adam_Sandler_at_Berlinale_2024.jpg"],
  ["nombre" => "Diomedes", "apellido" => "Diaz",  "descripcion" => "con sus canciones he disfrutado muchas fiestas", "foto" => "https://lastfm.freetls.fastly.net/i/u/ar0/ab0bde34b8a8c20673c8f3f13d43c409.jpg"],
  ["nombre" => "Eladio", "apellido" => "Carrion",  "descripcion" => "Mi cantante favorito de trap", "foto" => "https://s2.abcstatics.com/abc/www/multimedia/play/2024/02/27/eladio-carrion-kalF-U6013832163559HI-1200x840@diario_abc.jpg"],
  ["nombre" => "Mac", "apellido" => "Miller", "descripcion" => "Cantante con el que mas me identifico", "foto" => "https://press.warnerrecords.com/sites/g/files/g2000014901/files/2022-07/1MacMiller-Press-Photo-Credit-Brick-Stowell.jpg"],
  ["nombre" => "Michael", "apellido" => "Jordan", "descripcion" => " mejor jugador de baloncesto de todos los tiempos.", "foto" => "https://knilt.arcc.albany.edu/images/8/88/Michael_Jordan.jpg"],
  ["nombre" => "Mike", "apellido" => "Tyson", "descripcion" => "El boxeador mas ganster", "foto" => "https://m.media-amazon.com/images/S/pv-target-images/fd8fa3b0cb1ca8cbb57d5fa1787a945c5deb7433c69abc9cc6efa3399d27fbd3._SX1080_FMjpg_.jpg"],
];
?>



  <header>
    <div class="collapse bg-dark" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white">About</h4>
            <p class="text-muted">Add some information about the album below, the author, or any other background
              context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off
              to some social networking sites or contact information.</p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Contact</h4>
            <ul class="list-unstyled">
              <li><a href="#" class="text-white">Follow on Twitter</a></li>
              <li><a href="#" class="text-white">Like on Facebook</a></li>
              <li><a href="#" class="text-white">Email me</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a href="#" class="navbar-brand d-flex align-items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2"
            viewBox="0 0 24 24">
            <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
            <circle cx="12" cy="13" r="4" /></svg>
          <strong>Album</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
          aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
  </header>

  <main>

    <section class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="font-weight-light">Album example</h1>
          <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator,
            etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
          <p>
            <a href="#" class="btn btn-primary my-2">Main call to action</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
          </p>
        </div>
      </div>
    </section>

    <div class="album py-5 bg-light">
      <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          
      
          <?php
              foreach($idolos as $idolo){
                // echo "{$idolo['nombre']}, {$idolo['apellido']}, {$idolo['apodo']}, {$idolo['imagen']}, {$idolo['descripcion']} <br>";
                echo '<div class="col">
            <div class="card shadow-sm">
              <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="'. $idolo['foto'].'" alt="">
              <div class="card-body">
                <h1>'. $idolo['nombre']. " ". $idolo['apellido'].'</h1>
                <p class="card-text">' . $idolo['descripcion']. '</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>';};
          ?>
         
        </div>
      </div>
    </div>

  </main>

  <footer class="text-muted py-5">
    <div class="container">
      <p class="float-right mb-1">
        <a href="#">Back to top</a>
      </p>
      <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
      <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a
          href="/docs/5.0/getting-started/introduction/">getting started guide</a>.</p>
    </div>
  </footer>

</body>

</html>



// <?php 
//          foreach ($idolos as $idolo) {
//  echo "{$idolo['nombre']} {$idolo['apellido']} {$idolo['descripcion']} {$idolo['foto']}";
// } ?> 

