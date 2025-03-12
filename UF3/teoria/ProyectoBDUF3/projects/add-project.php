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
    $url = $_POST['url'];
    $thumbnail = $_POST['thumbnail'];
    $description = $_POST['description'];
}

//4. Preparar la consulta antes de insertar para evitar SQL injection
$stmt = $mysqli->prepare(
    "INSERT INTO Projects (title, url , thumbnail, description) 
     VALUES (?, ?, ?, ?)"
);

//5. Comprobar que la preparación de la consulta tuvo éxito
if (!$stmt) {
    echo 'Error en la preparación de la consulta: ' . $mysqli->error;
    exit;
}
//6. Bindear los parámetros
$stmt->bind_param('ssss', $title, $url, $thumbnail, $description);

// 7. Ejecutar la consulta
if ($stmt->execute()) {
    echo 'Proyecto agregado con éxito';
} else {
    echo 'Error al agregar el proyecto: ' . $mysqli->error;
}

// 8. Cerrar la declaración
$stmt->close();
$mysqli->close();


?>




<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Proyecto</title>
</head>

<body>

    <h1>Agregar Proyecto</h1>
    <form action="" method="POST">
        <label for="title">Título</label><br>
        <input type="text" name="title" id="title" required><br><br>

        <label for="url">URL</label><br>
        <textarea name="url" id="url" cols="30" rows="4" required></textarea><br><br>

        <label for="thumbnail">Thumbnail (URL de la imagen)</label><br>
        <input type="text" name="thumbnail" id="thumbnail" required><br><br>

        <label for="description">Descripción</label><br>
        <textarea name="description" id="description" rows="4" required></textarea><br><br>

        <input type="submit" value="Agregar proyecto">
    </form>

</body>

</html>