<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartelera - Cinemes Màgic Badalona</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #ffffff; /* Aquí tenemos un fondo blanco que da un aire limpio. */
        }
        .tarjeta-pelicula {
            background-color: #f2f2f2; /* Fondo gris claro para las tarjetas de las películas. */
            border: none; /* Sin bordes para un look más moderno. */
        }
        .poster {
            height: 450px; /* Fijo el alto para que todas las imágenes de las películas tengan la misma altura. */
            object-fit: cover; /* Aseguro que las imágenes cubran el espacio sin distorsionarse. */
        }
        header {
            background-color: #d32f2f; /* Rojo vibrante para el encabezado. */
            color: white; /* El texto en blanco destaca sobre el fondo rojo. */
            padding: 20px 0; /* Un poco de espacio en la parte superior e inferior. */
            display: flex; /* Para alinear el logotipo y el título horizontalmente. */
            align-items: center; /* Alineación vertical centrada. */
        }
        header img {
            width: 100px; /* Tamaño del logotipo. */
            height: 100px; /* Altura para hacerlo redondeado. */
            margin-right: 20px; /* Espacio entre el logotipo y el título. */
            border-radius: 50%; /* Hacemos que el logotipo sea completamente redondeado. */
        }
        header h1 {
            margin: 0; /* Sin margen para que todo quede bien alineado. */
        }
        .titulo-pelicula {
            color: #333333; /* Un gris oscuro para los títulos de las películas. */
        }
        .etiqueta-horario {
            background-color: #bdbdbd; /* Un gris suave para las etiquetas de horarios. */
        }
        .btn-ver-trailer {
            background-color: #d32f2f; /* Botón rojo para ver el tráiler. */
            border: none; /* Sin borde. */
        }
        .btn-ver-trailer:hover {
            background-color: #b71c1c; /* Un rojo más oscuro cuando pasas el ratón. */
        }
        .btn-info {
            background-color: #ffffff; /* Botón blanco para más información. */
            color: #333333; /* Texto en gris oscuro. */
            border: 1px solid #bdbdbd; /* Borde gris claro. */
        }
        .btn-info:hover {
            background-color: #f2f2f2; /* Cambio a gris claro al pasar el ratón. */
        }
        /* Estilos para el pie de página */
        footer {
            background-color: #000000; /* Negro para el fondo del footer. */
            color: #ffffff; /* Texto blanco en el footer. */
            padding: 20px 0; /* Espacio en la parte superior e inferior. */
            text-align: center; /* Centra el contenido. */
        }
        footer a {
            color: #ffffff; /* Enlaces en blanco. */
            text-decoration: none; /* Sin subrayado en los enlaces. */
            margin: 0 10px; /* Espaciado entre enlaces. */
        }
        footer a:hover {
            text-decoration: underline; /* Subrayado al pasar el ratón. */
        }
    </style>
</head>
<body>

<header class="text-center">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTiZ6Ees-OgPjnGXjAeaSgwnPOR7VEGVKqjSQ&s" alt="Logo de Cinemes Màgic Badalona" />
    <h1>Cartelera Cinemes Màgic Badalona</h1>
</header>

<div class="container my-5">
    <div class="row">
        <?php
        // Aquí incluimos el archivo que contiene la información de las películas
        include 'pelicules.php';
        
        foreach ($pelicules as $pelicula): ?>
            <div class="col-md-4 mb-4">
                <div class="tarjeta-pelicula h-100">
                    <img class="poster" src="<?= htmlspecialchars($pelicula['imatge']) ?>" alt="Poster de <?= htmlspecialchars($pelicula['nom']) ?>">
                    <div class="card-body d-flex flex-column">
                        <h5 class="titulo-pelicula"><?= htmlspecialchars($pelicula['nom']) ?></h5>
                        
                        <!-- Mostramos los horarios de proyección -->
                        <p class="card-text"><strong>Horarios:</strong></p>
                        <div>
                            <?php foreach ($pelicula['horaris'] as $horari): ?>
                                <span class="badge etiqueta-horario p-2 m-1"><?= htmlspecialchars($horari) ?></span>
                            <?php endforeach; ?>
                        </div>

                        <!-- Botones para ver el tráiler y más información -->
                        <div class="mt-auto d-flex justify-content-between">
                            <a href="trailer.php?trailer=<?= urlencode($pelicula['trailer']) ?>&nom=<?= urlencode($pelicula['nom']) ?>" class="btn btn-ver-trailer btn-sm flex-grow-1 mx-1">Ver Trailer</a>
                            <a href="detail.php?pelicula=<?= urlencode($pelicula['nom']) ?>" class="btn btn-info btn-sm flex-grow-1 mx-1">Ver más información</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Pie de página -->
<footer>
    <a href="#">Aviso legal</a> |
    <a href="#">Política de privacidad</a> |
    <a href="#">Política de compras</a> |
    <a href="#">Política de cookies</a>
    <p>Ocine Màgic © 2024</p>
</footer>

<!-- Scripts de Bootstrap y jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXDxH/nb0clZr3Q1D1ivkOIlOnW5m8UTdLZQzo6bE2hF5gK+gwD+kz4ePrnzrN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDuH2z0A+L21iOgVSEHWahpwxw6WqZq1IbXxQoUF0N0Cld3E8" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-XE+xvxOnjSGBg5F+idjpLV+Q7kgvU5Y+gXBPLhjKkX32vI2QmV/YjERr3z30wCk" crossorigin="anonymous"></script>

</body>
</html>
