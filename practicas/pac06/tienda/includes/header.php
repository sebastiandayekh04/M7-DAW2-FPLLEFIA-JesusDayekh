






<header class="navbar navbar-expand-lg navbar-light bg-light mb-5">
<div class="container-fluid d-flex justify-content-between">

<a class="navbar-brand" href="index.php">
<img src="https://mirasol-centre.com/nousite/wp-content/uploads/2017/05/logo-Mercadona.png" alt="logo-mercadona" class="img-fluid"
style="height: 50px;">
 </a>

 <div>
  <?php
  $nombre = $_POST['nombre'];
  $numero = $_POST['numero'];
  $foto = $_POST['URL'];
  ?>
    <div class="d-flex align-items-center">
    <h1 class="me-3 mb-0 px-4">Bienvenido <?php echo $nombre ?> </h1>
    <h5>Tu numero de celular es: <?php echo $numero ?></h5>
    <div>
    <img src="<?php echo $foto; ?>" alt="Foto Cliente" class="rounded-circle"
    style="width: 50px; height: 50px;">
    </div>
    </div>

      <button class="navbar-toggler" type="button" data-bs-
  toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-
  expanded="false" aria-label="Toggle navigation">

  <span class="navbar-toggler-icon"> </span>
  </button>

    </div>
  </header>
