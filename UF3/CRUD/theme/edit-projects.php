<?php
session_start();
require_once 'config.php';

//1. Verifica si el rol es administrador
if ($_SESSION['user_rol'] !== 'admin') {
    echo 'No tienes permisos para acceder a esta página';
    echo '<img src="https://i.blogs.es/d86db0/meme-fry-1/1366_2000.jpg" alt="">';
    exit;
}
if (empty($_GET['id'])) {
    echo 'No se ha recibido el ID del proyecto a actualizar';
    exit;
}
$id = $_GET['id'];

//2. Comprobar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //3. Recoger datos del formulario
    $title = $_POST['title'];
    $url = $_POST['url'];
    $description = $_POST['description'];
    $thumbnail = $_POST['thumbnail'];

    //4. Preparar la consulta antes de insertar
    $stmt = $mysqli->prepare(
        "UPDATE PROJECTS  set title = ?, url = ?, description = ?, thumbnail = ? where id = ?"
    );

    //5. Comprobar que la preparación de la consulta tuvo éxito
    if (!$stmt) {
        echo 'Error en la preparación de la consulta: ' . $mysqli->error;
        exit;
    }
    //6. Bindear los parámetros    
    $stmt->bind_param('ssssi', $title, $url, $description, $thumbnail, $id);

    // 7. Ejecutar la consulta
    if ($stmt->execute()) {
        echo 'Proyecto actualizado con éxito';
    } else {
        echo 'Error al editar el proyecto: ' . $mysqli->error;
    }

    // 8. Cerrar la declaración
    $stmt->close();
}

// Conectar a la base de datos y recuperar testimonios
$result = $mysqli->prepare("SELECT * FROM PROJECTS where id = ?");
$result->bind_param('i', $_GET['id']);
$result->execute();
$proyectos = $result->get_result();
if ($proyectos->num_rows === 0) {
    echo 'No se ha encontrado el proyecto a actualizar';
    exit;
}

$proyecto = $proyectos->fetch_object();
$mysqli->close();
?>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Proyectos</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<body class="bg-light">
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="text-primary">Editar Proyectos</h1>
            <a href="Admin.php" class="btn btn-secondary">Volver al panel de administración</a>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="title" class="form-label">Titulo</label>
                        <input type="text" name="title" id="title" class="form-control" required value="<?php echo $proyecto->title ?>">
                    </div>

                    <div class="mb-3">
                        <label for="url" class="form-label">Link</label>
                        <input type="text" name="url" id="url" class="form-control" required value="<?php echo $proyecto->url ?>">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descripción</label>
                        <textarea name="description" id="description" class="form-control" rows="4" required><?php echo $proyecto->description ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="thumbnail" class="form-label">Foto (URL)</label>
                        <input type="text" name="thumbnail" id="thumbnail" class="form-control" required value="<?php echo $proyecto->thumbnail ?>">
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Guardar Cambios</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
