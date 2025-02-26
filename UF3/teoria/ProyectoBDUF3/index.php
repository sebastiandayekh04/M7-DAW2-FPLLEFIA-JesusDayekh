<?php
require_once 'config.php';

// Consulta para obtener las noticias ordenadas por fecha (descendente)
$users = $mysqli->query("SELECT * FROM users");
$usersArray = $users->fetch_all(MYSQLI_ASSOC);


print_r($usersArray);

// Consulta para obtener los proyectos
$resultProjects = $mysqli->query("SELECT * FROM PROJECTS ORDER BY id DESC");
$projects = $resultProjects->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tarjetas de Datos - Noticias y Proyectos</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <!-- Sección de Noticias -->
        <h1 class="text-3xl font-bold mb-6 text-center">Noticias Recientes</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
            <?php foreach ($news as $item): ?>
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="<?= htmlspecialchars($item['thumbnail']) ?>" alt="<?= htmlspecialchars($item['title']) ?>" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-xl font-bold mb-2"><?= htmlspecialchars($item['title']) ?></h2>
                        <p class="text-gray-600 mb-2"><?= htmlspecialchars($item['subtitle']) ?></p>
                        <p class="text-gray-700 text-sm"><?= htmlspecialchars($item['description']) ?></p>
                        <p class="text-xs text-gray-500 mt-2"><?= htmlspecialchars($item['new_data']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Sección de Proyectos -->
        <h1 class="text-3xl font-bold mb-6 text-center">Proyectos Recientes</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <?php foreach ($projects as $project): ?>
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="<?= htmlspecialchars($project['thumbnail']) ?>" alt="<?= htmlspecialchars($project['title']) ?>" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h2 class="text-xl font-bold mb-2"><?= htmlspecialchars($project['title']) ?></h2>
                        <p class="text-gray-700 text-sm mb-2"><?= htmlspecialchars($project['description']) ?></p>
                        <a href="<?= htmlspecialchars($project['url']) ?>" target="_blank" class="text-blue-500 hover:text-blue-700 text-sm font-semibold">
                            Visitar Proyecto
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>