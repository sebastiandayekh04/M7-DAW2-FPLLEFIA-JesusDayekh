<?php
session_start();
require_once 'config.php';

//1. Verifica si el rol es administrador
if ($_SESSION['user_rol'] !== 'admin') {
    echo 'No tienes permisos para acceder a esta página';
    echo '<img src="https://i.blogs.es/d86db0/meme-fry-1/1366_2000.jpg" alt="">';
    exit;
}

// Extracción de testimonios
$resultTestimonios = $mysqli->query("SELECT * FROM TESTIMONIALS");

?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administrador</title>
</head>

<body>
    <h1>Panel de Administrador</h1>
    <h2>Testimonios</h2>

    <!-- Tabla dinámica mostrando los testimonios de la base de datos -->
    <table class="table" border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Descripción</th>
                <th>Rating</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Recorremos todas las filas de los testimonios
            while ($testimonio = $resultTestimonios->fetch_assoc()) : ?>
                <tr>
                    <td><?= ($testimonio['name']) ?></td>
                    <td><?= ($testimonio['surname']) ?></td>
                    <td><?= ($testimonio['description']) ?></td>
                    <td><?= ($testimonio['rating']) ?></td>
                    <td>
                        <!-- Enlaces para editar y eliminar testimonio -->
                        <a href="../ProyectoBDUF3/testomonials/edit-testimonials.php?id=<?= $testimonio['id'] ?>">Editar</a> |
                        <a href="../ProyectoBDUF3/testomonials/delete-testimonials.php?id=<?= $testimonio['id'] ?>">Eliminar</a>
                    </td>

                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <h2>Noticias</h2>

    <h2>Proyectos</h2>
</body>

</html>