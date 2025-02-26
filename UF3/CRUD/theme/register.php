<?php
session_start();
require_once('config.php');


//0.Comprobar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //Recoger datos del formulario
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $avatar = $_POST['avatar'];

    //2.cifrar la password con password_hash
    $passwordHashed = password_hash($password, PASSWORD_DEFAULT);

    //3.Preparar la consuklta antes de insertar para evitar el sql inception
    $stmt = $mysqli->prepare(
        "INSERT INTO users (name, surname, email, avatar, password, rol, age, job, date_register) VALUES (?, ?, ?, ?, ?, ?,  ?, NOW())"
    );
    //Comprobar que la preparacion tuvo exito
    if (!$stmt) {
        die('Error en la preparacion: ' . $mysqli->error);
    }
    //5. Bindear los parametros
    $stmt->bind_param('sssssis', $name, $surname, $email, $avatar, $passwordHashed, $age, $job);

    //6. Ejecutar la consulta 

    if ($stmt->execute()) {
        echo 'Usuario registrado correctamente';
    } else {
        echo 'Error al registar al usuario';
    }

    //7.cerrar la conexion
    $stmt->close();
    $mysqli->close();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>

<body>
    <h1>Registro</h1>
    <form action="" method="POST">

        <label for="name">Nombre: </label><br><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="surname">Apellidos: </label><br><br>
        <input type="text" id="surname" name="surname" required><br><br>

        <label for="password">Contraseña: </label><br><br>
        <input type="password" id="password" name="password" required><br><br>

        <label for="email">Email: </label><br><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="avatar">Avatar: </label><br><br>
        <input type="text" id="avatar" name="avatar" required><br><br>

        <input type="submit" value="Registrarse">
    </form>
</body>
</html>