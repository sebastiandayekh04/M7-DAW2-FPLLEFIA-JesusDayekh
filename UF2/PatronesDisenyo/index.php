<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilos.css" rel="stylesheet">
    <title>Patrones de diseño</title>
</head>
<?php
include_once("./header.php");

?>

<body class=" d-flex justify-content-center align-items-center vh-100" style="background-image: url('https://miro.medium.com/v2/resize:fit:1200/1*-nGOaPQzlTbUGkndeFdxbQ.png'); background-size:cover; background-repeat: no-repeat;">

    <main>
        <div class="bg-dark text-white p-4 rounded">


            <div class="d-flex flex-wrap justify-content-center gap-3">

                <div class="card text-dark" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Patrones creacionales</h5>
                        <p class="card-text">Los patrones creacionales proporcionan varios mecanismos de creación de objetos que incrementan la flexibilidad y la reutilización del código existente.</p>
                        <a href="./creacion.php" class="btn btn-outline-primary">Ver más</a>
                    </div>
                </div>

                <div class="card text-dark" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Patrones estructurales</h5>
                        <p class="card-text">Los patrones estructurales explican cómo ensamblar objetos y clases en estructuras más grandes, a la vez que se mantiene la flexibilidad y eficiencia de estas estructuras.</p>
                        <a href="./estructurals.php" class="btn btn-outline-warning">Ver más</a>
                    </div>
                </div>

                <div class="card text-dark" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Patrones de comportamiento</h5>
                        <p class="card-text">Los patrones de comportamiento tratan con algoritmos y la asignación de responsabilidades entre objetos.</p>
                        <a href="./comportament.php" class="btn btn-outline-info">Ver más</a>
                    </div>
                </div>

            </div>
        </div>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</html>