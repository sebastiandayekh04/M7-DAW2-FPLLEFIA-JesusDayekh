<?php
session_start();
require_once 'config.php';

//1. Verifica si el rol es administrador
if ($_SESSION['user_rol'] !== 'admin') {
    echo 'No tienes permisos para acceder a esta página';
    echo '<img src="https://i.blogs.es/d86db0/meme-fry-1/1366_2000.jpg" alt="">';
    exit;
}

//2. Comprobar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //3. Recoger datos del formulario
    $title = $_POST['title'];
    $subtitle = $_POST['subtitle'];
    $description = $_POST['description'];
    $thumbnail = $_POST['thumbnail'];

    $new_data = date('Y-m-d');

    //4. Preparar la consulta antes de insertar
    $stmt = $mysqli->prepare(
        "INSERT INTO NEWS (title, subtitle, description, thumbnail, new_data )
        VALUES (?, ?, ?, ?, ?)"
    );

    //5. Comprobar que la preparación de la consulta tuvo éxito
    if (!$stmt) {
        echo 'Error en la preparación de la consulta: ' . $mysqli->error;
        exit;
    }
    //6. Bindear los parámetros    
    $stmt->bind_param('sssss', $title, $subtitle, $description, $thumbnail, $new_data);

    // 7. Ejecutar la consulta
    if ($stmt->execute()) {
        echo 'Noticia agregado con éxito';
    } else {
        echo 'Error al agregar la noticia: ' . $mysqli->error;
    }

    // 8. Cerrar la declaración
    $stmt->close();
    $mysqli->close();
}



?>




<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Noticias</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="text-primary">Agregar Noticias</h1>
            <a href="Admin.php" class="btn btn-secondary">Volver al panel de administración</a>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="title" class="form-label">Titulo</label>
                        <input type="text" name="title" id="title" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Subtitulo</label>
                        <input type="text" name="subtitle" id="subtitle" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descripción</label>
                        <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="thumbnail" class="form-label">Foto (URL)</label>
                        <input type="text" name="thumbnail" id="thumbnail" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Agregar Noticias</button>
                </form>
            </div>
        </div>
    </div>
    
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>