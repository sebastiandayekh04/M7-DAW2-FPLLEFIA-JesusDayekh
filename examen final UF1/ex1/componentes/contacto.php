<?php 
if(!isset($_SESSION)) {
    session_start();
    require_once'componentes/header.php';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
<h1> Hola <?php $_SESSION['nombre'] ?> Soy la pagina de Contacto </h1>
</body>
</html>
