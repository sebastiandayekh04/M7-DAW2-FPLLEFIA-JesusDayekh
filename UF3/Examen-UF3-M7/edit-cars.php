<?php
session_start();
require_once 'config.php';
$uploadDir = 'uploads/';

//1. Verifica si el rol es administrador
if ($_SESSION['user_rol'] !== 'admin') {
    echo 'No tienes permisos para acceder a esta página';
    echo '<img src="https://i.blogs.es/d86db0/meme-fry-1/1366_2000.jpg" alt="">';
    exit;
}
if (empty($_GET['id'])) {
    echo 'No se ha recibido el ID de la caria a actualizar';
    exit;
}
$id = $_GET['id'];

//2. Comprobar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //3. Recoger datos del formulario
    $modelo = $_POST['modelo'];
    $categoria = $_POST['categoria'];
    $precio_por_dia = $_POST['precio_por_dia'];
    $old_imagen = $_POST['old-imagen'];
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
                if (file_exists($old_imagen) && $old_imagen !== $imagen) {
                    unlink($old_imagen);
                }
            } else {
                echo 'Error al mover el archivo a la carpeta de destino.';
                exit;
            }
        } else {
            echo 'Error: Solo se permiten archivos de imagen (jpg, jpeg, png, gif).';
            exit;
        }
    } else if ($old_imagen !== null && $old_imagen !== '') {
        $imagen = $old_imagen;
    } else {
        echo 'Error al subir la imagen.';
        exit;
    }

    //4. Preparar la consulta antes de insertar
    $stmt = $mysqli->prepare(
        "UPDATE vehiculos  set modelo = ?, categoria = ?, precio_por_dia = ?, imagen = ?, disponible = ? where id = ?"
    );

    //5. Comprobar que la preparación de la consulta tuvo éxito
    if (!$stmt) {
        echo 'Error en la preparación de la consulta: ' . $mysqli->error;
        exit;
    }
    //6. Bindear los parámetros    
    $stmt->bind_param('ssissi', $modelo, $categoria, $precio_por_dia, $imagen, $disponible, $id);

    // 7. Ejecutar la consulta
    if ($stmt->execute()) {
        echo 'auto actualizado con éxito';
    } else {
        echo 'Error al editar la noticia: ' . $mysqli->error;
    }

    // 8. Cerrar la declaración
    $stmt->close();
}

// Conectar a la base de datos y recuperar testimonios
$result = $mysqli->prepare("SELECT * FROM vehiculos where id = ?");
$result->bind_param('i', $_GET['id']);
$result->execute();
$cars = $result->get_result();
if ($cars->num_rows === 0) {
    echo 'No se ha encontrado la noticia a actualizar';
    exit;
}

$car = $cars->fetch_object();
$mysqli->close();
?>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Autos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <body class="bg-light">
        <div class="container mt-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="text-primary">Editar Autos</h1>
                <a href="admin.php" class="btn btn-secondary">Volver al panel de administración</a>
            </div>

            <div class="card shadow-sm">
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="modelo" class="form-label">Modelo</label>
                            <input type="text" name="modelo" id="modelo" class="form-control" required value="<?php echo $car->modelo ?>">
                        </div>

                        <div class="mb-3">
                            <label for="categoria" class="form-label">Categoria</label>
                            <input type="text" name="categoria" id="categoria" class="form-control" required value="<?php echo $car->categoria ?>">
                        </div>

                        <div class="mb-3">
                            <label for="precio_por_dia" class="form-label">Precio por dia ($)</label>
                            <input type="text" name="precio_por_dia" id="precio_por_dia" class="form-control" required value="<?php echo $car->precio_por_dia ?>">
                        </div>


                        <div class="mb-3">
                            <label for="disponible" class="form-label">Disponible</label>
                            <select name="disponible" id="disponible" class="form-control" required>
                                <option value="1">Sí</option>
                                <option value="0">No</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="old-imagen" class="form-label">Foto (Actual)</label>
                            <br>
                            <input type="hidden" name="old-imagen" value="<?php echo $car->imagen ?>">
                            <img src="<?php echo $car->imagen ?>" alt="" style="width: 5vw; height: 5vw;">
                            <br>
                        </div>

                        <div class="mb-3">
                            <label for="imagen" class="form-label">Cambiar imagen</label>
                            <input type="file" name="imagen" id="imagen" class="form-control" accept="image/*">
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Guardar Cambios</button>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>

</html>