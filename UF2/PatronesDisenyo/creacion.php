<?php

if (isset($_POST['tipoPatron']) && !empty($_POST['tipoPatron'])) {

    $tipoPatron = $_POST['tipoPatron'];

    header("Location:./patrons/PCreacional/{$tipoPatron}.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/styles.css" rel="stylesheet">
    <title>Patrones de Creación</title>
</head>

<?php
include_once '../PatronesDisenyo/header.php';

echo getHeader(1);

?>

<body class="principalBody">
    <div class="card p-3 bg-dark text-white" style="width: 20rem;">
        <form method="post">
            <div class="mb-3">
                <label for="tipoPatron" class="form-label">Selecciona un patrón:</label>
                <select name="tipoPatron" id="tipoPatron" class="form-select" style="z-index: 1000 !important;" required>
                    <option value="" disabled selected>Elige una opción</option>
                    <option value="FacthoryMethod">Factory Method</option>
                    <option value="Prototype">Prototype</option>
                    <option value="Singleton">Singleton</option>
                </select>
            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-info btn-sm" type="submit">Enviar</button>
            </div>
        </form>

        <div class="card border border-dark mt-3" style="width: 18rem">
            <img class="card-img-top border" src="https://www.ionos.mx/digitalguide/fileadmin/DigitalGuide/Schaubilder/el-patron-singleton-en-la-practica.png" 
                 alt="Patrón Singleton" style="height: 150px; object-fit: cover;">
            <div class="card-body p-2">
                <p class="card-text text-black small">
                Los patrones creacionales proporcionan mecanismos de creación de objetos que incrementan la flexibilidad y la reutilización de código existente. Los patrones estructurales explican cómo ensamblar objetos y clases en estructuras más grandes a la vez que se mantiene la flexibilidad y eficiencia de la estructura.
                </p>
            </div>
        </div>

    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</html>
