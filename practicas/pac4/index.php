<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cine Badalona</title>
</head>
<body>
<?php
// index.php
include 'pelicules.php';
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Cartellera - Cinemes Màgic Badalona</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card-img-top {
            height: 450px;
            object-fit: cover;
        }
        header {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
        }
        header h1 {
            margin: 0;
        }
    </style>
</head>
<body>

<header class="text-center">
    <h1>Cartellera Cinemes Màgic Badalona</h1>
</header>

<div class="container my-5">
    <div class="row">
        <?php foreach ($pelicules as $pelicula): ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="<?= htmlspecialchars($pelicula['imatge']) ?>" alt="Poster de <?= htmlspecialchars($pelicula['nom']) ?>">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?= htmlspecialchars($pelicula['nom']) ?></h5>
                        <p class="card-text"><strong>Horaris:</strong> <?= implode(', ', $pelicula['horaris']) ?></p>
                        <div class="mt-auto">
                            <a href="trailer.php?trailer=<?= urlencode($pelicula['trailer']) ?>&nom=<?= urlencode($pelicula['nom']) ?>" class="btn btn-primary btn-block mb-2">Veure Tràiler</a>
                            <a href="detall.php?pelicula=<?= urlencode($pelicula['nom']) ?>" class="btn btn-secondary btn-block">Veure més informació</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Bootstrap JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXDxH/nb0clZr3Q1D1ivkOIlOnW5m8UTdLZQzo6bE2hF5gK+gwD+kz4ePrnzrN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDuH2z0A+L21iOgVSEHWahpwxw6WqZq1IbXxQoUF0N0Cld3E8" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-XE+xvxOnjSGBg5F+idjpLV+Q7kgvU5Y+gXBPLhjKkX32vI2QmV/YjERr3z30wCk" crossorigin="anonymous"></script>
</body>
</html>

</body>
</html>