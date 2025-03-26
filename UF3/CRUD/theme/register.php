<?php
session_start();
require_once('config.php');

// Definir la carpeta dinde se guardarán las fotos
$uploadDir = 'uploads/';

$error = "";
$email_error = false;

$name = "";
$surname = "";
$email = "";
$age = "";
// 0. Comprobar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 1. Recoger datos del formulario
    $name = $_POST['name'];
    $surname = $_POST['surname'];  // Recoger apellido
    $email = $_POST['email'];
    $password = $_POST['password'];
    $age = $_POST['age'];          // Recoger edad
    //1.2 procesar el archivo de imagen
    if (isset($_FILES['avatar']) && $_FILES['avatar']['error'] === UPLOAD_ERR_OK) {
    //obtener información del archivo
    $fileTmpPath = $_FILES['avatar']['tmp_name']; //ruta temporal en el servidor
    $fileName = $_FILES['avatar']['name']; //nombre original del archivo

    //separar el nombre del archivo y la extensión
    $fileNameCmps = explode(".", $fileName); 
    $fileExtension = strtolower(end($fileNameCmps)); //extensión del archivo

    //definir las extensiones permitidas (solo imagenes)
    $allowedfileExtensions = array('jpg', 'jpeg', 'png', 'gif');
    if (in_array($fileExtension, $allowedfileExtensions)) {
        //renombar el archivo para evitar duplicados (usamos md5 y time)
        //$newFileName = md5(time() . $fileName) . '.' . $fileExtension;
        $newFileName = md5(strtolower($email)) . '.' . $fileExtension;
        //ruta final en la carpeta uploads
        $dest_path = $uploadDir . $newFileName;
        if (file_exists($dest_path)) {
            $error = "Error: El correo ya existe.";
            $email_error = true;
        } else {
            //mover el archivo de la carpeta temporal a la carpeta uploads
            if (!move_uploaded_file($fileTmpPath, $dest_path)) {
                $error = "Error: No se pudo mover al archivo a la carpeta de destino.";
                //die('Error: No se pudo mover al archivo a la carpeta de destino.');
            }
        }
    } else {
        $error = "Error: Solo se permiten archivos de imagen (jpg, jpeg, png, gif).";
        //die('Error: Solo se permiten archivos de imagen (jpg, jpeg, png, gif).');
    }
}
if ($error === "") {
    // 2. Cifrar la contraseña con password_hash
    $passwordHashed = password_hash($password, PASSWORD_DEFAULT);

    // 3. Preparar la consulta antes de insertar para evitar SQL injection
    $stmt = $mysqli->prepare(
        "INSERT INTO USERS (name, surname, email, avatar, password, rol, age, date_register) 
        VALUES (?, ?, ?, ?, ?, 'user', ?, NOW())"
    );

    // 4. Comprobar que la preparación de la consulta tuvo éxito
    if (!$stmt) {
        echo 'Error en la preparación de la consulta: ' . $mysqli->error;
        //exit;
    } else {
        // 5. Bindear los parámetros
        $stmt->bind_param('sssssi', $name, $surname, $email, $dest_path, $passwordHashed, $age);

        // 6. Ejecutar la consulta
        if ($stmt->execute()) {
            header('Location: login.php');
        } else {
            echo 'Error al registrar el usuario: ' . $mysqli->error;
        }
    }
    $stmt->close();
} else {
    echo '<b style="color:red">'.$error."</b>";
}


// 7. Cerrar la declaración
$mysqli->close();

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="signup">
        <div class="content text-center ">
            <h1>Registro</h1>
            <form action="" method="POST" enctype="multipart/form-data">

                <div class="inputBox">
                    <label for="name">Nombre: </label><br><br>
                    <input class="p-2 m-2" type="text" id="name" name="name" placeholder="Nombre" value="<? echo $name; ?>" required><br><br>
                </div>

                <div class="inputBox">
                    <label for="surname">Apellidos: </label><br><br>
                    <input class="p-2 m-2" type="text" id="surname" name="surname" placeholder="Apellidos" required><br><br>
                </div>

                <div class="inputBox">
                    <label for="password">Contraseña: </label><br><br>
                    <input class="p-2 m-2" type="password" id="password" name="password" placeholder="Contraseña" required><br><br>
                </div>

                <div class="inputBox">
                    <label for="email">Email: </label><br><br>
                    <input class="p-2 m-2 <? if ($email_error) echo 'border border-danger' ?>" type="email" id="email" name="email" placeholder="Correo electrónico" required><br><br>
                </div>

                <div class="inputBox">
                    <label for="avatar">Avatar: </label><br><br>
                    <input class="p-2 m-2" type="file" id="avatar" name="avatar" accept="image/*" required><br><br>
                </div>

                <div class="inputBox">
                    <label for="age">Edad: </label><br><br>
                    <input class="p-2 m-2" type="number" id="age" name="age" placeholder="Edad"><br><br>
                </div>

                <div class="inputBox">
                    <label for="job">Trabajo: </label><br><br>
                    <input class="p-2 m-2" type="text" id="job" name="job" placeholder="Trabajo"><br><br>
                </div>
                <input class="bg-warning btn mt-2" type="submit" value="Registrarse">
            </form>
            <div class="text-center">
                <p>¿Ya tienes cuenta?</p>
                <a href="login.php">Iniciar Sesion</a>
                </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>