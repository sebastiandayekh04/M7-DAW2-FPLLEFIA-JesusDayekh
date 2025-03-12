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
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $description = $_POST['description'];
    $rating = $_POST['rating'];
}

//4. Preparar la consulta antes de insertar
$stmt = $mysqli->prepare(
    "INSERT INTO Testimonials (name, surname, description, rating) 
     VALUES (?, ?, ?, ?)"
);

//5. Comprobar que la preparación de la consulta tuvo éxito
if (!$stmt) {
    echo 'Error en la preparación de la consulta: ' . $mysqli->error;
    exit;
}
//6. Bindear los parámetros    
$stmt->bind_param('sssi', $name, $surname, $description, $rating);

// 7. Ejecutar la consulta
if ($stmt->execute()) {
    echo 'Testimonio agregado con éxito';
} else {
    echo 'Error al agregar el testimonio: ' . $mysqli->error;
}

// 8. Cerrar la declaración
$stmt->close();
$mysqli->close();

?>




<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Testimonios</title>
</head>

<body>

    <h1>Agregar Testimonios</h1>
    <form action="" method="POST">
        <label for="name">Nombre</label><br>
        <input type="text" name="name" id="name" required><br><br>

        <label for="surname">Apellido</label><br>
        <input type="text" name="surname" id="surname" required><br><br>

        <label for="description">Descripción</label><br>
        <textarea name="description" id="description" cols="30" rows="4" required></textarea><br><br>

        <label for="rating">Calificación (1 a 5)</label><br>
        <input type="number" name="rating" id="rating" min="1" max="5" step="1" required><br><br>

        <input type="submit" value="Agregar Testimonio">
    </form>



</body>

</html>