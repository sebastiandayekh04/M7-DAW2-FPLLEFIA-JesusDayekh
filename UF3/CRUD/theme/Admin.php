<?php
session_start();
require_once 'config.php';

// Verifica si el rol es administrador
if ($_SESSION['user_rol'] !== 'admin') {
    echo '<div class="text-center mt-5">';
    echo '<h1 class="text-danger">No tienes permisos para acceder a esta página</h1>';
    echo '<img src="https://i.blogs.es/d86db0/meme-fry-1/1366_2000.jpg" alt="Sin permisos" class="img-fluid">';
    echo '</div>';
    exit;
}

// Extracción de datos
$resultTestimonios = $mysqli->query("SELECT * FROM TESTIMONIALS");
$resultNews = $mysqli->query("SELECT * FROM NEWS");
$resultProjects = $mysqli->query("SELECT * FROM PROJECTS");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="text-center mb-4">
            <a href="index.php" class="btn btn-secondary btn-lg">Volver al Inicio</a>
        </div>
        <h1 class="text-center mb-4">Panel de Administrador</h1>

        <!-- Testimonios -->
        <h2 class="text-primary">Testimonios</h2>
        <a href="../ProyectoBDUF3/testomonials/add-testimonials.php?id=<?= $testimonio['id'] ?>" class="btn btn-primary btn-sm">Añadir</a>
        <table class="table table-striped table-bordered">

            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Descripción</th>
                    <th>Rating</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($testimonio = $resultTestimonios->fetch_assoc()) : ?>
                    <tr>
                        <td><?= htmlspecialchars($testimonio['name']) ?></td>
                        <td><?= htmlspecialchars($testimonio['surname']) ?></td>
                        <td><?= htmlspecialchars($testimonio['description']) ?></td>
                        <td><?= htmlspecialchars($testimonio['rating']) ?></td>
                        <td>
                            <a href="../ProyectoBDUF3/testomonials/edit-testimonials.php?id=<?= $testimonio['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                            <a href="../ProyectoBDUF3/testomonials/delete-testimonials.php?id=<?= $testimonio['id'] ?>" class="btn btn-danger btn-sm">Eliminar</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

        <!-- Noticias -->
        <h2 class="text-primary">Noticias</h2>
        <a href="../ProyectoBDUF3/news/add-news.php?id=<?= $news['id'] ?>" class=" btn btn-primary btn-sm">Añadir</a>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($news = $resultNews->fetch_assoc()) : ?>
                    <tr>
                        <td><?= htmlspecialchars($news['title']) ?></td>
                        <td><?= htmlspecialchars($news['description']) ?></td>
                        <td><?= htmlspecialchars($news['date']) ?></td>
                        <td>
                            <a href="../ProyectoBDUF3/news/edit-news.php?id=<?= $news['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                            <a href="../ProyectoBDUF3/news/delete-news.php?id=<?= $news['id'] ?>" class="btn btn-danger btn-sm">Eliminar</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

        <!-- Proyectos -->
        <h2 class="text-primary">Proyectos</h2>
        <a href="../ProyectoBDUF3/projects/add-projects.php?id=<?= $projects['id'] ?>" class=" btn btn-primary btn-sm">Añadir</a>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($projects = $resultProjects->fetch_assoc()) : ?>
                    <tr>
                        <td><?= htmlspecialchars($projects['title']) ?></td>
                        <td><?= htmlspecialchars($projects['description']) ?></td>
                        <td><?= htmlspecialchars($projects['date']) ?></td>
                        <td>
                            <a href="../ProyectoBDUF3/projects/edit-projects.php?id=<?= $projects['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                            <a href="../ProyectoBDUF3/projects/delete-projects.php?id=<?= $projects['id'] ?>" class="btn btn-danger btn-sm">Eliminar</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>