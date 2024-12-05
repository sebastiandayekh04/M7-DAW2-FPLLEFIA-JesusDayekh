<?php 
 session_start();

 if (!isset($_SESSION['username'])) {
    header('location:login.php');
    exit;

    if ($_SESSION['role'] = "admin") {
        header('location:manage.php');
        exit;
    } else {
        header('location:trivial.php');
        exit;
    };
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Biblioteca</title>
</head>
<body class="d-flex justify-content-center align-items-center vh-100" style="background-image: url('https://e00-elmundo.uecdn.es/assets/multimedia/imagenes/2022/11/29/16697520789870.jpg'); background-size:cover; background-repeat: no-repeat;">
    <div class="card p-4 bg-dark text-white" style="width: 22rem;">
        <h2 class="card-title text-center">¡Bienvenido al Quiz!</h2>
        <form action="login.php" method="post">
            <button type="submit" class="btn btn-primary w-100">⚙️</button>
        </form>
    </div>
</body>
</html>
