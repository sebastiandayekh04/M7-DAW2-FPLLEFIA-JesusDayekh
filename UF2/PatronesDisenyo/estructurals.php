<?php

if (isset($_POST['tipoPatron']) && !empty($_POST['tipoPatron'])) {

    $tipoPatron = $_POST['tipoPatron'];

    header("Location:./patrons/PEstructural/{$tipoPatron}.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    l
    <title>Patrones Estructurales</title>

</head>

<?php
include_once('../PatronesDisenyo/header.php');
?>
<body class="d-flex justify-content-center align-items-center vh-100" style="background-image: url('https://miro.medium.com/v2/resize:fit:1200/1*-nGOaPQzlTbUGkndeFdxbQ.png'); background-size:cover; background-repeat: no-repeat;">
   
    <div class="card p-4 bg-dark text-white" style="width: 22rem;">
        <h2 class="card-title text-center"></h2>
        <form method="post">
            <div class="mb-3">
                <label for="tipoPatron" class="form-label">Tipo de Patron Estructural:</label>
                <select name="tipoPatron" id="tipoPatron" class="form-select" required>
                    <option> </option>
                    <option value="Bridge">Bridge</option>
                    <option value="Composite">Composite</option>
                    <option value="Proxy">Proxy</option>
                </select>
                <?php
                /* 
                if (isset($_POST["tipoPatron"])) {
                    echo $_POST["tipoPatron"];
                }
                */
                ?>
            </div>

            <div class="d-flex justify-content-center">
                <button class="btn btn-info " type="submit">Enviar</button>
            </div>

        </form>

        <div class="card border border-dark" style="width: 19rem;">
            <img class="card-img-top border border-dark" src="https://refactoring.guru/images/patterns/content/builder/builder-es.png" alt="Card image cap">
            <div class="card-body">
                <p class="card-text text-black">Los patrones de diseño estructural son patrones de diseño que facilitan el diseño al identificar una forma sencilla de realizar relaciones entre entidades. Los ejemplos de patrones estructurales incluyen: Patrón de adaptador: 'adapta' una interfaz para una clase en una que espera un cliente.</p>
            </div>
        </div>

    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</html>