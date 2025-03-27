<?php
session_start();
require_once 'config.php';
// Definir la carpeta dinde se guardarán las fotos
$uploadDir = 'uploads/';

//1. Verifica si el rol es administrador
if ($_SESSION['user_rol'] !== 'admin') {
    echo 'No tienes permisos para acceder a esta página';
    echo '<img src="https://i.blogs.es/d86db0/meme-fry-1/1366_2000.jpg" alt="">';
    exit;
}

//2. Comprobar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //3. Recoger datos del formulario
    $modelo = $_POST['modelo'];
    $categoria = $_POST['categoria'];
    $precio_por_dia = $_POST['precio_por_dia'];
    $disponible = $_POST['disponible'];

    //3.1 Procesar el archivo de imagen
    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['imagen']['tmp_name'];
        $fileName = $_FILES['imagen']['name'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        // Extensiones permitidas
        $allowedfileExtensions = array('jpg', 'jpeg', 'png', 'gif');
        if (in_array($fileExtension, $allowedfileExtensions)) {
            // Renombrar el archivo para evitar duplicados
            $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

            // Ruta de destino
            $uploadFileDir = './uploads/';
            $dest_path = $uploadFileDir . $newFileName;

            // Mover el archivo a la carpeta de destino
            if (move_uploaded_file($fileTmpPath, $dest_path)) {
                $imagen = $dest_path; // Guardar la ruta en la base de datos
            } else {
                echo 'Error al mover el archivo a la carpeta de destino.';
                exit;
            }
        } else {
            echo 'Error: Solo se permiten archivos de imagen (jpg, jpeg, png, gif).';
            exit;
        }
    } else {
        echo 'Error al subir la imagen.';
        exit;
    }


    //4. Preparar la consulta antes de insertar
    $stmt = $mysqli->prepare(
        "INSERT INTO vehiculos (modelo, categoria, precio_por_dia, imagen, disponible) 
        VALUES (?, ?, ?, ?, ?)"
    );

    //5. Comprobar que la preparación de la consulta tuvo éxito
    if (!$stmt) {
        echo 'Error en la preparación de la consulta: ' . $mysqli->error;
        exit;
    }
    //6. Bindear los parámetros    
    $stmt->bind_param('ssisi', $modelo, $categoria, $precio_por_dia, $imagen, $disponible);

    // 7. Ejecutar la consulta
    if ($stmt->execute()) {
        echo 'Auto agregado con éxito';
    } else {
        echo 'Error al agregar el Auto: ' . $mysqli->error;
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
    <title>Agregar Autos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="text-primary">Agregar Autos</h1>
            <a href="admin.php" class="btn btn-secondary">Volver al panel de administración</a>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="modelo" class="form-label">Modelo</label>
                        <input type="text" name="modelo" id="modelo" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="categoria" class="form-label">Categoria</label>
                        <input type="text" name="categoria" id="categoria" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="precio_por_dia" class="form-label">Precio por dia</label>
                        <textarea name="precio_por_dia" id="precio_por_dia" class="form-control" rows="4" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="disponible" class="form-label">Disponible</label>
                        <select name="disponible" id="disponible" class="form-control" required>
                            <option value="1">Sí</option>
                            <option value="0">No</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="imagen" class="form-label">Foto (Subir archivo)</label>
                        <input type="file" name="imagen" id="imagen" class="form-control" accept="image/*" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Agregar Auto</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>