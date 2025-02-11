<?php

if (isset($_POST['tipoPatron']) && !empty($_POST['tipoPatron'])) {

    $tipoPatron = $_POST['tipoPatron'];

    header("Location:./patrons/PComportamiento/{$tipoPatron}.php");
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
    <title>Patrones de Comportamiento</title>
</head>
<?php
include_once '../PatronesDisenyo/header.php';

echo getHeader(1);

?>

<body class="principalBody">
    <div class="d-flex justify-content-center align-items-center vh-100"> 
        <div class="card p-3 bg-dark text-white" style="width: 20rem;">
            <h2 class="card-title text-center">Patrones de Comportamiento</h2>

            <form method="post">
                <div class="mb-3">
                    <label for="tipoPatron" class="form-label">Selecciona un patrón:</label>
                    <select name="tipoPatron" id="tipoPatron" class="form-select" required>
                        <option value="" disabled selected>Elige una opción</option>
                        <option value="ChainOfResponsability">Chain Of Responsibility</option>
                        <option value="Memento">Memento</option>
                        <option value="Observer">Observer</option>
                    </select>
                </div>

                <div class="d-flex justify-content-center">
                    <button class="btn btn-info btn-sm" type="submit">Enviar</button>
                </div>
            </form>

            <div class="card border border-dark mt-3" style="width: 18rem;">
                <img class="card-img-top border" src="https://yosoydani.com/wp-content/uploads/2017/11/unnamed-file-1.jpg" 
                     alt="Patrón de Comportamiento" style="height: 150px; object-fit: cover;">
                <div class="card-body p-2">
                    <p class="card-text text-black small">
                        Los patrones de comportamiento tratan con algoritmos y la asignación de responsabilidades entre objetos. Permiten pasar solicitudes a lo largo de una cadena de manejadores, donde cada manejador decide si la procesa o la pasa al siguiente.
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</html>