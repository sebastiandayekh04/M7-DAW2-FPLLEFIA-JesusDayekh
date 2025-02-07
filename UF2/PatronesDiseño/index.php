
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    l
    <title>Patrones de diseño</title>
</head>
<body class="d-flex justify-content-center align-items-center vh-100" style="background-image: url('https://miro.medium.com/v2/resize:fit:1200/1*-nGOaPQzlTbUGkndeFdxbQ.png'); background-size:cover; background-repeat: no-repeat;">
    <div class="card p-4 bg-dark text-white" style="width: 22rem;">
        <h2 class="card-title text-center"></h2>
        <form method="post">
            <div class="mb-3">
                <label for="tipoPatron" class="form-label">Tipo de Patron:</label>
                <select name="tipoPatron" id="tipoPatron" class="form-select" onchange="this.form.submit()" required>
                    <option> </option>
                    <option value="Creacionales">Patrones Creacionales</option>
                    <option value="Estructutrales">Patrones Estructutrales</option>
                    <option value="Comportamiento">Patrones de Comportamiento</option>
                </select>
                <?php
                if(isset($_POST["tipoPatron"])){
                    echo $_POST["tipoPatron"];
                }

                ?>
            </div>
        </form>
    </div>
</body>
</html>
