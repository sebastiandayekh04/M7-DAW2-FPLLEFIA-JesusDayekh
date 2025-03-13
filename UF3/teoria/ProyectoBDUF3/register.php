<?php
session_start();
require_once 'config.php';

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

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>

<body>
    <h1>Registro</h1>
    <form action="" method="POST">
        <label for="name">Nombre</label><br>
        <input type="text" name="name" id="name" required><br>

        <label for="surname">Apellido</label><br>
        <input type="text" name="surname" id="surname" required><br>

        <label for="email">Correo electrónico</label><br>
        <input type="email" name="email" id="email" required><br>

        <label for="password">Contraseña</label><br>
        <input type="password" name="password" id="password" required><br>

        <label for="avatar">Avatar</label><br>
        <input type="text" name="avatar" id="avatar"><br>

        <label for="age">Edad</label><br>
        <input type="number" name="age" id="age" required><br>

        <input type="submit" value="Registrarse">
    </form>
</body>

</html>