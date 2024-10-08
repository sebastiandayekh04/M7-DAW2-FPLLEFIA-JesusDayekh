<?php
// trailer.php

if (!isset($_GET['trailer']) || !isset($_GET['nom'])) {
    echo "Tràiler no disponible.";
    exit;
}

$trailer = urldecode($_GET['trailer']);
$nomPelicula = urldecode($_GET['nom']);
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Tràiler - <?= htmlspecialchars($nomPelicula) ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            text-align: center;
            padding: 50px 0;
        }
        header {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            margin-bottom: 40px;
        }
        header h1 {
            margin: 0;
        }
        .iframe-container {
            position: relative;
            width: 80%;
            padding-bottom: 45%; /* 16:9 */
            margin: auto;
        }
        .iframe-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        .btn-custom {
            margin-top: 30px;
        }
    </style>
</head>
<body>

<header>
    <h1>Tràiler de <?= htmlspecialchars($nomPelicula) ?></h1>
</header>

<div class="iframe-container">
    <iframe src="<?= htmlspecialchars($trailer) ?>?autoplay=1&rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</div>

<a href="index.php" class="btn btn-primary btn-custom">Tornar a la cartellera</a>

<!-- Bootstrap JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXDxH/nb0clZr3Q1D1ivkOIlOnW5m8UTdLZQzo6bE2hF5gK+gwD+kz4ePrnzrN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDuH2z0A+L21iOgVSEHWahpwxw6WqZq1IbXxQoUF0N0Cld3E8" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-XE+xvxOnjSGBg5F+idjpLV+Q7kgvU5Y+gXBPLhjKkX32vI2QmV/YjERr3z30wCk" crossorigin="anonymous"></script>
</body>
</html>
