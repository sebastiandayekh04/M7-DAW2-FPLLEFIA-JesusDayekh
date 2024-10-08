<?php   
// detail.php

// Comprobamos si se ha pasado el nombre de la película en la URL
if (isset($_GET['pelicula'])) {
    $nombrePelicula = urldecode($_GET['pelicula']);
    include 'pelicules.php';  // Cargamos la lista de películas

    // Buscamos la película en la lista
    foreach ($pelicules as $pelicula) {
        if ($pelicula['nom'] === $nombrePelicula) {
            $peliculaSeleccionada = $pelicula;
            break; // Salimos del bucle cuando la encontramos
        }
    }

    // Si no encontramos la película, mostramos un mensaje de error
    if (!isset($peliculaSeleccionada)) {
        die("Película no encontrada.");
    }
} else {
    die("No se ha proporcionado ninguna película.");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles - <?= htmlspecialchars($peliculaSeleccionada['nom']) ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #ffffff; /* Fondo blanco para que sea más claro */
        }
        .cabecera {
            background-color: #d32f2f; /* Fondo rojo */
            color: white; /* Texto blanco */
            padding: 20px 0; /* Espaciado vertical */
            text-align: center; /* Centrado del contenido */
        }
        .cabecera img {
            width: 80px; /* Ancho del logo */
            height: 80px; /* Alto del logo */
            margin-right: 20px; /* Espacio a la derecha del logo */
            border-radius: 50%; /* Hacemos el logo circular */
        }
        .cabecera h1 {
            display: inline-block; /* Para que el título esté al lado del logo */
        }
        .tarjetaPelicula {
            margin-top: 20px; /* Espacio encima de la tarjeta */
            border: 1px solid #d32f2f; /* Borde rojo */
            border-radius: 10px; /* Bordes redondeados */
            overflow: hidden; /* Ocultar lo que se desborda */
            box-shadow: 0 4px 8px rgba(0,0,0,0.2); /* Sombra de la tarjeta */
        }
        .posterPelicula img {
            max-width: 100%; /* Para que no se salga del contenedor */
            height: auto; /* Altura automática para mantener proporciones */
        }
        .infoPelicula {
            padding: 15px; /* Espacio interno */
            background-color: #f2f2f2; /* Fondo gris claro */
        }
        .carrusel img {
            height: 500px; /* Altura de las imágenes del carrusel */
            object-fit: cover; /* Mantener la proporción de las imágenes */
        }
        .botonTrailer {
            background-color: #d32f2f; /* Botón rojo */
            color: white; /* Texto blanco */
            border: none; /* Sin borde */
        }
        .botonTrailer:hover {
            background-color: #b71c1c; /* Rojo más oscuro al pasar el ratón */
        }
        footer {
            background-color: #000000; /* Fondo negro */
            color: #ffffff; /* Texto blanco */
            padding: 20px; /* Espaciado */
            text-align: center; /* Centrado del contenido */
        }
        footer a {
            color: #ffffff; /* Color blanco para enlaces */
            text-decoration: none; /* Sin subrayado */
            margin: 0 10px; /* Espaciado entre enlaces */
        }
        .burbujaHorarios {
            background-color: #d32f2f; /* Fondo rojo */
            color: white; /* Texto blanco */
            border-radius: 20px; /* Bordes redondeados */
            padding: 10px 20px; /* Espaciado interno */
            display: inline-block; /* Para que se ajuste al contenido */
            margin-top: 10px; /* Espacio encima */
        }
        .carruselPequeño {
            margin-top: 20px; /* Espacio encima del carrusel */
        }
        .valoracion {
            margin-top: 10px; /* Espacio encima de la valoración */
        }
        .estrella {
            display: inline-block; /* Para que las estrellas se alineen horizontalmente */
            width: 20px; /* Tamaño de la estrella */
            height: 20px; /* Altura de la estrella */
        }
    </style>
</head>
<body>

<header class="cabecera">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTiZ6Ees-OgPjnGXjAeaSgwnPOR7VEGVKqjSQ&s" alt="Logo de Cinemes Màgic">
    <h1>Detalles de <?= htmlspecialchars($peliculaSeleccionada['nom']) ?></h1>
</header>

<div class="container">
    <div class="tarjetaPelicula">
        <div class="row">
            <div class="col-md-4 posterPelicula">
                <img src="<?= htmlspecialchars($peliculaSeleccionada['imatge']) ?>" alt="Poster de <?= htmlspecialchars($peliculaSeleccionada['nom']) ?>">
            </div>
            <div class="col-md-8">
                <div class="infoPelicula">
                    <h3>Sinopsis</h3>
                    <p><?= htmlspecialchars($peliculaSeleccionada['sinopsi']) ?></p>
                    <h5>Título: <?= htmlspecialchars($peliculaSeleccionada['nom']) ?></h5>
                    <h5>Duración: <?= htmlspecialchars($peliculaSeleccionada['durada']) ?>'</h5>
                    <h5>Director: <?= htmlspecialchars($peliculaSeleccionada['director']) ?></h5>
                    <h5>Reparto: <?= htmlspecialchars($peliculaSeleccionada['repartiment']) ?></h5>
                    <h5>Calificación: <?= htmlspecialchars($peliculaSeleccionada['qualificacio']) ?> años</h5>
                    <h5>Género: <?= htmlspecialchars($peliculaSeleccionada['genere']) ?></h5>
                    
                    <!-- Estrellas de valoración -->
                    <div class="valoracion">
                        <strong>Valoración:</strong>
                        <?php
                        $valoracion = $peliculaSeleccionada['valoracio'];
                        $svgEstrella = '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="yellow" class="bi bi-star" viewBox="0 0 16 16"><path d="M3.612 15.443c-.394.208-.842-.129-.742-.554l.854-5.352-4.11-4.08c-.3-.291-.145-.784.283-.842l5.501-.8L8 .288l2.39 4.463 5.501.8c.428.058.583.551.283.842l-4.11 4.08.854 5.352c.1.425-.348.762-.742.554L8 13.187l-4.388 2.256z"/></svg>';
                        for ($i = 0; $i < $valoracion; $i++): ?>
                            <span class="estrella"><?= $svgEstrella ?></span>
                        <?php endfor; ?>
                    </div>

                    <!-- Burbuja con horarios -->
                    <div class="burbujaHorarios">
                        <strong>Horarios:</strong>
                        <?php if (isset($peliculaSeleccionada['horaris']) && is_array($peliculaSeleccionada['horaris'])): ?>
                            <?php foreach ($peliculaSeleccionada['horaris'] as $horario): ?>
                                <span><?= htmlspecialchars($horario) ?> | </span>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <span>No hay horarios disponibles.</span>
                        <?php endif; ?>
                    </div>

                    <!-- Carrusel de imágenes -->
                    <div class="row mt-3">
                        <div class="col-12">
                            <h3 class="text-center">Más Imágenes de la película</h3>
                            <div id="carruselExtra" class="carousel slide carruselPequeño" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <?php foreach ($peliculaSeleccionada['carusel'] as $index => $imagenCarrusel): ?>
                                        <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                                            <img src="<?= htmlspecialchars($imagenCarrusel) ?>" class="d-block w-100" style="height: 250px; object-fit: cover;" alt="Imagen extra <?= $index + 1 ?>">
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carruselExtra" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Anterior</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carruselExtra" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Siguiente</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Botones para ver el tráiler y regresar a la cartelera -->
<div class="container text-center my-4">
    <a href="trailer.php?trailer=<?= urlencode($peliculaSeleccionada['trailer']) ?>&nom=<?= urlencode($peliculaSeleccionada['nom']) ?>" class="btn btn-primary btn-sm flex-grow-1 mx-1">Ver Trailer</a>
    <a href="index.php" class="btn btn-secondary ms-3">Regresar a la Cartelera</a>
</div>

<!-- Footer -->
<footer>
    <a href="#">Aviso legal</a> |
    <a href="#">Política de privacidad</a> |
    <a href="#">Política de compras</a> |
    <a href="#">Política de cookies</a>
    <p>Ocine Màgic © 2024</p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
