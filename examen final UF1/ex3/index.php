<?php
session_start();


$usuarios = [
    ["username" => "admin", "password" => "adminpass", "role" => "admin"],
    ["username" => "reader", "password" => "readerpass", "role" => "lector"]
];


if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    $_SESSION['img'] = $_POST['img'];
}


    if (isset($_POST['username'])  && isset($_POST['password'])) {
  
        foreach ($usuarios as $usuario){
            if($usuario['username'] === $_POST['username']  && ($usuario['password']) === $_POST['password'] ){
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['role'] = $usuario['role'];
                $_SESSION['img'] = $_POST['img'];
                header('Location:home.php');
                exit;
        }
    }
    $error = "<div class='alert alert-danger mt-3'>Usuario o contraseña incorrecta. ¡Inténtalo de nuevo!</div>";
   } 
  

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX3</title>
    <link rel="stylesheet" href="style.css"> <!-- Usa el archivo de estilo que acompaña a la estructura de HTML proporcionada -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <section>

        <div class="signin">
            <div class="content text-center">
                <h2>Inicia sesión</h2>
                
                <form method="POST" action="index.php">
                    <div class="inputBox ">
                        <input class="p-2 m-2" placeholder="Username" type="text" name="username" id="usernmae" required>
                       
                    </div>
                    <div class="inputBox ">
                        <input class="p-2 m-2" placeholder="Password" type="password" name="password" id="password" required>
                       
                    </div>
                    <div class="inputBox ">
                        <input class="p-2 m-2" placeholder="Foto de perfil" type="text" name="img" id="img">
                       
                    </div>
                    <?php if (!empty($error)) : ?>
                        <div class="alert alert-danger"><?= $error ?></div>
                    <?php endif; ?>
                    
                    <div class="inputBox">
                        <input class="bg-warning btn mt-2" type="submit" value="Iniciar">
                    </div>
                </form>
            </div>
        </div>
    </section>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>