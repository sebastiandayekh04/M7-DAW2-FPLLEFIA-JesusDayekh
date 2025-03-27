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
    echo 'No se ha recibido el ID del testimonio a Actualizar';
    exit;
}
$id = $_GET['id'];

//2. Comprobar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //3. Recoger datos del formulario
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $description = $_POST['description'];
    $rating = $_POST['rating'];

     //3.1 Procesar el archivo de imagen
     if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['photo']['tmp_name'];
        $fileName = $_FILES['photo']['name'];
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
                $photo = $dest_path; // Guardar la ruta en la base de datos
                if (file_exists($old_photo) && $old_photo !== $photo) {
                    unlink($old_photo);
                }
            } else {
                echo 'Error al mover el archivo a la carpeta de destino.';
                exit;
            }
        } else {
            echo 'Error: Solo se permiten archivos de imagen (jpg, jpeg, png, gif).';
            exit;
        }
    } else if ($old_photo !== null && $old_photo !== '') {
        $photo = $old_photo;
    } else {
        echo 'Error al subir la imagen.';
        exit;
    }

    //4. Preparar la consulta antes de insertar
    $stmt = $mysqli->prepare(
        "UPDATE TESTIMONIALS  set name = ?, surname = ?, description = ?, photo = ?, rating = ? where id = ?"
    );

    //5. Comprobar que la preparación de la consulta tuvo éxito
    if (!$stmt) {
        echo 'Error en la preparación de la consulta: ' . $mysqli->error;
        exit;
    }
    //6. Bindear los parámetros    
    $stmt->bind_param('ssssii', $name, $surname, $description, $photo, $rating, $id);

    // 7. Ejecutar la consulta
    if ($stmt->execute()) {
        echo 'Testimonio actualizado con éxito';
    } else {
        echo 'Error al editar el testimonio: ' . $mysqli->error;
    }

    // 8. Cerrar la declaración
    $stmt->close();
}

// Conectar a la base de datos y recuperar testimonios
$result = $mysqli->prepare("SELECT * FROM TESTIMONIALS where id = ?");
$result->bind_param('i', $_GET['id']);
$result->execute();
$testimonios = $result->get_result();
if ($testimonios->num_rows === 0) {
    echo 'No se ha encontrado el testimonio a actualizar';
    exit;
}

$testimonio = $testimonios->fetch_object();
$mysqli->close();
?>




<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Testimonios</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<body class="bg-light">
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="text-primary">Editar Testimonios</h1>
            <a href="Admin.php" class="btn btn-secondary">Volver al panel de administración</a>
        </div>

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        <input type="text" name="name" id="name" class="form-control" required value="<?php echo $testimonio->name ?>">
                    </div>

                    <div class="mb-3">
                        <label for="surname" class="form-label">Apellido</label>
                        <input type="text" name="surname" id="surname" class="form-control" required value="<?php echo $testimonio->surname ?>">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descripción</label>
                        <textarea name="description" id="description" class="form-control" rows="4" required><?php echo $testimonio->description ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="rating" class="form-label">Calificación (1 a 5)</label>
                        <input type="number" name="rating" id="rating" class="form-control" min="1" max="5" step="1" required value="<?php echo $testimonio->rating ?>">
                    </div>

                    <div class="mb-3">
                        <label for="old-photo" class="form-label">Foto (Actual)</label>
                        <br>
                        <input type="hidden" name="old-photo" value="<?php echo $testimonio->photo ?>">
                        <img src="<?php echo $testimonio->photo ?>" alt="" style="width: 5vw; height: 5vw;">
                        <br>
                    </div>

                    <div class="mb-3">
                        <label for="photo" class="form-label">Cambiar imagen</label>
                        <input type="file" name="photo" id="photo" class="form-control" accept="image/*">
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Guardar Cambios</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
