 <?php
    session_start();
    require_once('config.php');
    // 1. Comprobar si el formulario ha sido enviado
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // 2. Recoger datos del formulario en variables
        $email = $_POST['email'];
        $password = $_POST['password'];

        // 3. Ejecutar la consulta
        $result = mysqli_query($mysqli, "SELECT * FROM Users WHERE email = '$email' LIMIT 1");

        // 4. Comprobar si hay resultados
        if ($result && $result->num_rows > 0) {
            $user = $result->fetch_assoc();
            // 5. Comprobar si la contraseña es correcta
            if (password_verify($password, $user['password'])) {
                // 6. Guardar el usuario en la sesión
                $_SESSION['user'] = $user;
                $_SESSION['user_email'] = $user['email'];
                $_SESSION['user_name'] = $user['name'];
                $_SESSION['user_surname'] = $user['surname'];
                $_SESSION['user_avatar'] = $user['avatar'];
                $_SESSION['user_rol'] = $user['rol'];
                $_SESSION['user_age'] = $user['age'];
                $_SESSION['user_date_register'] = $user['date_register'];

                // 7. Redirigir al usuario a la página de inicio
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
 </head>

 <body>
     <h1>Inicia Sesion</h1>
     <form action="" method="POST">

         <label for="email">Email: </label><br><br>
         <input type="email" id="email" name="email" required><br><br>

         <label for="password">Contraseña: </label><br><br>
         <input type="password" id="password" name="password" required><br><br>

         <input type="submit" value="Iniciar Sesion">
     </form>
 </body>

 </html>