<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    l
    <title>Patrones de Comportamiento</title>
</head>
<?php
include("./header.php");
include("./nav.php");
?>

<body class="d-flex justify-content-center align-items-center vh-100" style="background-image: url('https://miro.medium.com/v2/resize:fit:1200/1*-nGOaPQzlTbUGkndeFdxbQ.png'); background-size:cover; background-repeat: no-repeat;">
    <div class="card p-4 bg-dark text-white" style="width: 22rem;">
        <h2 class="card-title text-center"></h2>
        <form method="post">
            <div class="mb-3">
                <label for="tipoPatron" class="form-label">Tipo de Patron de Comportamiento:</label>
                <select name="tipoPatron" id="tipoPatron" class="form-select" onchange="this.form.submit()" required>
                    <option> </option>
                    <option value="ChainOfReflection">Chain Of Reflection</option>
                    <option value="Memento">Memento</option>
                    <option value="Observer">Observer</option>
                </select>
                <?php
                if (isset($_POST["tipoPatron"])) {
                    echo $_POST["tipoPatron"];
                }

                ?>
            </div>
        </form>

        <div class="card border border-dark" style="width: 19rem;">
            <img class="card-img-top border border-dark" src="https://yosoydani.com/wp-content/uploads/2017/11/unnamed-file-1.jpg" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-black">Los patrones de comportamiento tratan con algoritmos y la asignación de responsabilidades entre objetos. Permite pasar solicitudes a lo largo de una cadena de manejadores. Al recibir una solicitud, cada manejador decide si la procesa o si la pasa al siguiente manejador de la cadena.</p>
            </div>
        </div>

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</html>