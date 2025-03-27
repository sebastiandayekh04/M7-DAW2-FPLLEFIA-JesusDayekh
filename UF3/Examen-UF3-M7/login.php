<?php
session_start();
require_once('config.php');


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recoger datos del formulario en variables
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Evitar SQL Injection usando consultas preparadas
    $stmt = $mysqli->prepare("SELECT * FROM usuarios WHERE email = ? LIMIT 1");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Comprobar si hay resultados
    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Comprobar si la contraseña es correcta
        if (password_verify($password, $user['password'])) {
            // Guardar el usuario en la sesión
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['user_avatar'] = $user['avatar'];
            $_SESSION['user_rol'] = $user['rol'];

            header('Location: index.php');
            exit;
        } else {
            echo 'Contraseña incorrecta.';
        }
    } else {
        echo 'Usuario no encontrado.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="signin">
        <div class="content text-center border ">
            <h1>Inicia Sesion</h1>
            <form action="" method="POST">

                <div class="inputBox">
                    <label for=" email">Email: </label><br><br>
                    <input class="p-2 m-2" type="email" placeholder="@gmail.com" id="email" name="email" required><br><br>
                </div>

                <div class="inputBox">
                    <label for="password">Contraseña: </label><br><br>
                    <input class="p-2 m-2" type="password" placeholder="Password" id=" password" name="password" required><br><br>
                </div>

                <input class="bg-warning btn mt-2" type="submit" value="Iniciar Sesion">
        </div>
    </div>
    </form>
    <div class="text-center">
        <p>¿No tienes cuenta?</p>
        <a href="register.php">Registrarse</a>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>