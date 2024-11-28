<?php 
session_start();

$_SESSION['username'] = $_POST['nombre'];
$_SESSION['password'] = $_POST['apellido'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Ejercicio 1</title>
</head>
<body>
   <?php require_once'componentes/header.php'; ?>
   <div class="container">
   <h1 class="text-center mb-4">Bienvenido <?php $_SESSION['username'] ?>, introduce tus datos</h1>
    <div class="d-flex justify-content-center align-items-center vh-100">
    <form method="post">
        <div class="mb-3"> 
        <label> Nombre: </label>
        <input type="text" name="nombre" id="nombre">
        </div>
        <br>
        <div class="mb-3">
        <label> Apellido: </label>
        <input type="text" name="apellido" id="apellido">
        </div>
        <button type="submit" value="post" class="btn btn-primary" >Enviar info</button>
    </form>
    </div>
   </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>