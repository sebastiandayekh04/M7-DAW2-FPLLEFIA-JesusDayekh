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

$resultCars = $mysqli->query('SELECT * FROM vehiculos');

$resultReservas = $mysqli->query('SELECT * FROM reservas');

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="text-center mb-4">
            <a href="index.php" class="btn btn-secondary btn-lg">Volver al Inicio</a>
        </div>
        <h1 class="text-center mb-4">Panel de Administrador</h1>

        <!-- Testimonios -->
        <h2 class="text-primary">Autos</h2>
        <a href="add-cars.php" class="btn btn-primary btn-sm">Añadir</a>
        <table class="table table-striped table-bordered table-custom">

            <thead class="table-dark">
                <tr>
                    <th class="th-width-10">Modelo</th>
                    <th class="th-width-10">Categoria</th>
                    <th class="th-width-12">Imagen</th>
                    <th class="th-width-30">Precio por dia</th>
                    <th class="th-width-4">disponible</th>
                    <th class="th-actions">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($cars = $resultCars->fetch_assoc()) : ?>
                    <tr>
                        <td><?= htmlspecialchars($cars['modelo']) ?></td>
                        <td><?= htmlspecialchars($cars['categoria']) ?></td>
                        <td><img src="<?= $cars['imagen'] ?>" alt="<?= htmlspecialchars($cars['modelo']) ?>" class="img-table" /></td>
                        <td><?= htmlspecialchars($cars['precio_por_dia']) ?></td>
                        <td><?= htmlspecialchars($cars['disponible']) ?></td>
                        <td>
                            <a href="edit-cars.php?id=<?= $cars['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                            <a href="delete-cars.php?id=<?= $cars['id'] ?>" onclick="return confirm('Esta seguro que desea borrarlo?')" class="btn btn-danger btn-sm">Eliminar</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>