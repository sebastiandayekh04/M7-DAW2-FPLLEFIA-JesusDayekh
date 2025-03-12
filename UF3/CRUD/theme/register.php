<?php
session_start();
require_once ('config.php');

// 0. Comprobar si el formulario ha sido enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 1. Recoger datos del formulario
    $name = $_POST['name'];
    $surname = $_POST['surname'];  // Recoger apellido
    $email = $_POST['email'];
    $password = $_POST['password'];
    $avatar = $_POST['avatar'];    // Recoger avatar (opcional)
    $age = $_POST['age'];          // Recoger edad
}

// 2. Cifrar la contraseña con password_hash
$passwordHashed = password_hash($password, PASSWORD_DEFAULT);

// 3. Preparar la consulta antes de insertar para evitar SQL injection
$stmt = $mysqli->prepare(
    "INSERT INTO Users (name, surname, email, avatar, password, rol, age, date_register) 
     VALUES (?, ?, ?, ?, ?, 'user', ?, NOW())"
);

// 4. Comprobar que la preparación de la consulta tuvo éxito
if (!$stmt) {
    echo 'Error en la preparación de la consulta: ' . $mysqli->error;
    exit;
}

// 5. Bindear los parámetros
$stmt->bind_param('sssssi', $name, $surname, $email, $avatar, $passwordHashed, $age);

// 6. Ejecutar la consulta
if ($stmt->execute()) {
    echo 'Usuario registrado con éxito';
} else {
    echo 'Error al registrar el usuario: ' . $mysqli->error;
}

// 7. Cerrar la declaración
$stmt->close();
$mysqli->close();

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