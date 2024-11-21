<?php 
session_start();
if (isset($_POST['username']) && isset($_POST['dificultad']) && isset($_POST['apellido']) && isset($_POST['foto']) ) {

    $_SESSION['username'] = $_POST['username'];
    $_SESSION['dificultad'] = $_POST['dificultad'];
    $_SESSION['apellido'] = $_POST['apellido'];
    $_SESSION['foto'] = $_POST['foto'];

    header('Location: room.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Escape Room</title>
</head>
<body class="d-flex justify-content-center align-items-center vh-100" style="background-image: url('https://i.pinimg.com/originals/98/34/66/983466ddf30a88bf189b1efa13c335f7.jpg'); background-size:cover; background-repeat: no-repeat;">
    <div class="card p-4 bg-dark text-white" style="width: 22rem;">
        <h2 class="card-title text-center">Bienvenido!</h2>
        <form method="post">
            <div class="mb-3">
                <label for="username" class="form-label">Nombre:</label>
                <input type="text" name="username" id="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido:</label>
                <input type="text" name="apellido" id="apellido" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto:</label>
                <input type="text" name="foto" id="foto" class="form-control">
            </div>
            <div class="mb-3">
                <label for="dificultad" class="form-label">Nivel de Dificultad:</label>
                <select name="dificultad" id="dificultad" class="form-select" required>
                    <option value="facil">Facil</option>
                    <option value="medio">Medio</option>
                    <option value="dificil">Difícil</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary w-100">Comienza el juego</button>
        </form>
    </div>
</body>
</html>
