<?php 
// detall.php

// Verificar si se ha recibido el nombre de la película por la URL
if (isset($_GET['pelicula'])) {
    $pelicula_nom = urldecode($_GET['pelicula']);
    include 'pelicules.php';  // Asumimos que este archivo contiene la lista $pelicules

    // Buscar la película seleccionada en el array de películas
    foreach ($pelicules as $pelicula) {
        if ($pelicula['nom'] === $pelicula_nom) {
            $pelicula_seleccionada = $pelicula;
            break;
        }
    }

    // Si no se encuentra la película, mostrar un mensaje de error
    if (!isset($pelicula_seleccionada)) {
        die("Pel·lícula no trobada.");
    }
} else {
    die("No s'ha proporcionat cap pel·lícula.");
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detall - <?= htmlspecialchars($pelicula_seleccionada['nom']) ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .movie-header {
            background-color: #343a40;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .movie-header h1 {
            margin: 0;
        }
        .movie-details {
            margin-top: 20px;
        }
        .movie-poster img {
            max-width: 100%;
            height: auto;
        }
        .movie-synopsis {
            margin-top: 20px;
        }
        .movie-info {
            margin-top: 30px;
            padding: 15px;
            background-color: #e9ecef;
            border-radius: 10px;
        }
        .movie-info h5 {
            margin-bottom: 15px;
        }
        .movie-info p {
            margin: 0;
        }
        .movie-carousel img {
            height: 250px;
            object-fit: cover;
        }
    </style>
</head>
<body>

<div class="movie-header">
    <h1><?= htmlspecialchars($pelicula_seleccionada['nom']) ?></h1>
</div>

<div class="container movie-details">
    <div class="row">
        <div class="col-md-4 movie-poster">
            <img src="<?= htmlspecialchars($pelicula_seleccionada['imatge']) ?>" alt="Poster de <?= htmlspecialchars($pelicula_seleccionada['nom']) ?>">
        </div>
        <div class="col-md-8">
            <div class="movie-synopsis">
                <h3>Sinopsi</h3>
                <p><?= htmlspecialchars($pelicula_seleccionada['sinopsi']) ?></p>
            </div>
            <div class="movie-info">
                <h5>Duració: <?= htmlspecialchars($pelicula_seleccionada['duracio']) ?>'</h5>
                <h5>Director: <?= htmlspecialchars($pelicula_seleccionada['director']) ?></h5>
                <h5>Actors: <?= htmlspecialchars($pelicula_seleccionada['repartiment']) ?></h5>
                <h5>Calificació: <?= htmlspecialchars($pelicula_seleccionada['qualificacio']) ?> anys</h5>
                <h5>Gènere: <?= htmlspecialchars($pelicula_seleccionada['genere']) ?></h5>
            </div>
        </div>
    </div>

    <!-- Trailers y Carousel -->
    <div class="row mt-5">
        <div class="col-12">
            <h3>Tràiler</h3>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="<?= htmlspecialchars($pelicula_seleccionada['trailer']) ?>?autoplay=1" allowfullscreen></iframe>
            </div>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-12">
            <h3>Imatges extres</h3>
            <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php foreach ($pelicula_seleccionada['carusel'] as $index => $carusel_image): ?>
                        <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                            <img src="<?= htmlspecialchars($carusel_image) ?>" class="d-block w-100 movie-carousel" alt="Imatge extra <?= $index + 1 ?>">
                        </div>
                    <?php endforeach; ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="..." alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Third slide">
    </div>
  </div>
</div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
