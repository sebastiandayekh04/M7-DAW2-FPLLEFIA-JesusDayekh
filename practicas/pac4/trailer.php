<?php 
// trailer.php

// Comprobamos que se haya pasado el enlace del tráiler y el nombre de la película
if (!isset($_GET['trailer']) || !isset($_GET['nom'])) {
    echo "Tràiler no disponible."; // Si falta algún parámetro, mostramos un mensaje
    exit; // Salimos del script
}

// Decodificamos los valores pasados en la URL para usarlos
$trailer = urldecode($_GET['trailer']);
$nomPelicula = urldecode($_GET['nom']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tràiler - <?= htmlspecialchars($nomPelicula) ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: black; /* Fondo negro para crear ambiente de cine */
            text-align: center; /* Centramos el texto */
            padding: 50px 0; /* Espaciado vertical */
        }
        header {
            background-color: #d32f2f; /* Fondo rojo que representa la pasión del cine */
            color: white; /* Texto blanco para contrastar */
            padding: 20px 0; /* Espaciado arriba y abajo */
            margin-bottom: 40px; /* Espacio debajo del encabezado */
        }
        header h1 {
            margin: 0; /* Sin márgenes para que el título esté justo */
        }
        .contenedor-video {
            position: relative; /* Para posicionar el iframe */
            width: 80%; /* Ancho del contenedor */
            padding-bottom: 45%; /* Relación de aspecto 16:9 */
            margin: auto; /* Centrar contenedor */
        }
        .contenedor-video iframe {
            position: absolute; /* Posicionamos el iframe dentro del contenedor */
            top: 0; /* Alineamos arriba */
            left: 0; /* Alineamos a la izquierda */
            width: 100%; /* Ancho completo del contenedor */
            height: 100%; /* Altura completa del contenedor */
        }
        .boton-volver {
            margin-top: 30px; /* Espacio encima del botón */
            background-color: #d32f2f; /* Botón rojo como el encabezado */
            border: none; /* Sin borde para un diseño limpio */
            color: white; /* Texto blanco en el botón */
        }
        .boton-volver:hover {
            background-color: #b71c1c; /* Rojo más oscuro al pasar el ratón */
        }
    </style>
</head>
<body>

<header>
    <h1>Tràiler de <?= htmlspecialchars($nomPelicula) ?></h1> <!-- Título del tráiler -->
</header>

<div class="contenedor-video"> <!-- Contenedor para el video del tráiler -->
    <iframe src="<?= htmlspecialchars($trailer) ?>?autoplay=1" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</div>

<!-- Botón para volver a la cartelera -->
<a href="index.php" class="btn btn-custom boton-volver">Volver a Cartelera</a>

<!-- Scripts de Bootstrap, Popper.js y jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXDxH/nb0clZr3Q1D1ivkOIlOnW5m8UTdLZQzo6bE2hF5gK+gwD+kz4ePrnzrN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDuH2z0A+L21iOgVSEHWahpwxw6WqZq1IbXxQoUF0N0Cld3E8" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-XE+xvxOnjSGBg5F+idjpLV+Q7kgvU5Y+gXBPLhjKkX32vI2QmV/YjERr3z30wCk" crossorigin="anonymous"></script>
</body>
</html>
