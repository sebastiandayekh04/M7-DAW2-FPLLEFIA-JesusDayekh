<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    l
    <title>Patrones de Creacion</title>
</head>
<?php
include_once('../PatronesDisenyo/header.php');
?>

<body class="d-flex justify-content-center align-items-center vh-100" style="background-image: url('https://miro.medium.com/v2/resize:fit:1200/1*-nGOaPQzlTbUGkndeFdxbQ.png'); background-size:cover; background-repeat: no-repeat;">
    <div class="card p-4 bg-dark text-white" style="width: 22rem;">
        <h2 class="card-title text-center"></h2>
        <form method="post">
            <div class="mb-3">
                <label for="tipoPatron" class="form-label">Tipo de Patron Creacional:</label>
                <select name="tipoPatron" id="tipoPatron" class="form-select" onchange="this.form.submit()" required>
                    <option> </option>
                    <option value="FacthoryMethod">Facthory Method</option>
                    <option value="Prototype">Prototype</option>
                    <option value="Singleton">Singleton</option>
                </select>

            </div>
            <div class="d-flex justify-content-center">
                <button class="btn btn-info " type="submit">Enviar</button>
            </div>
        </form>

        <div class="card border border-dark" style="width: 19rem;">
            <img class="card-img-top border border-dark" src="https://media.licdn.com/dms/image/v2/D4E12AQHUtQbQzGtRdA/article-cover_image-shrink_600_2000/article-cover_image-shrink_600_2000/0/1695216630652?e=2147483647&v=beta&t=KozwhPnBLo2ysAmtrLylpFSgkYeP-sFwZqA4JuXm5AM" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-black">Los patrones creacionales proporcionan mecanismos de creación de objetos que incrementan la flexibilidad y la reutilización de código existente. Los patrones estructurales explican cómo ensamblar objetos y clases en estructuras más grandes a la vez que se mantiene la flexibilidad y eficiencia de la estructura.</p>
            </div>
        </div>


    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</html>