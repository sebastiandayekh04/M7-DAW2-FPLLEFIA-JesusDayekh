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
    <title>Document</title>
</head>
<body>
<?php require_once'componentes/header.php'; ?>
<h1>Hola  <?php $_SESSION['nombre'] ?> <?php $_SESSION['apeliido'] ?> soy la pagina de Inicio </h1>
</body>
</html>
